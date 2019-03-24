<template>
    <div class="modal-body mx-3">
        <form @submit="formSubmit">
            <div class="md-form">
                <label for="name">Nombre</label>
                <input type="text" v-model="fields.name" id="name" class="form-control">
                <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
            </div>
            <div class="md-form">
                <label for="contact_number">N° contacto( opcional )</label>
                <input type="number" v-model="fields.contact_number" id="contact_number" class="form-control">
                    <div v-if="errors && errors.contact_number" class="text-danger">{{ errors.contact_number[0] }}</div>
            </div>
            <div class="md-form">
                <label for="email">Email</label>
                <input type="email" v-model="fields.email" id="email" class="form-control">
                    <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
            </div>
            <div class="md-form">
                <label for="subject">Motivo</label>
                <input type="text" v-model="fields.subject" id="subject" class="form-control">
                <div v-if="errors && errors.subject" class="text-danger">{{ errors.subject[0] }}</div>
            </div>
            <div class="md-form">
                <label for="message">Mensaje</label>
                <textarea class="form-control" v-model="fields.message" id="message" rows="5"></textarea>
                <div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
            </div>
            <div class="form-group">
                <input id="enviar" type="submit" value="Enviar mensaje" class="btn btn-primary">
            </div>
        </form>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Contact us');
    },
    data(){
        return{
            fields: {},
            errors: {},
            success: false,
            loaded: true,
        };
    },
    methods: {
        formSubmit(e) {
            this.loaded = true;
            e.preventDefault();
            if(this.loaded){
                this.loaded = false;
                this.success = false;
                this.errors = {};
                $('#enviar').val('Procesando...');
                axios.post('formSubmit', this.fields)
                .then( response => {
                    setTimeout( function() {
                        $('#enviar').val('Enviar Mensaje');
                        this.fields = {};
                        this.loaded = true;
                        this.success = true;
                    },1000);
                    $('#modalContactForm').modal('hide');
                    toastr.success('Su Mensaje ha sido enviado');
                })
                .catch(error => {
                    this.loaded = false;
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                        setTimeout( function() {
                            $('#enviar').val('Enviar Mensaje');
                        },300);
                    }
                });
            }
            
        }
    }
}
</script>