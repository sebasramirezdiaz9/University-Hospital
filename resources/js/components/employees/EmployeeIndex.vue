<template>
    <div>
       <v-server-table :url="$route('employees.index')" :columns="columns" ref="table" :options="options" :filterByColumn="true" >
            <div slot="actions" slot-scope="props" class="action-buttons">
                         <template v-if="props.row.email_verified_at==null">
                            <button title="Reenviar email" type="button" class="btn btn-warning" :data-id="props.row.id" @click="resendEmail(props.row.id)">
                                <i class="far fa-envelope"></i>
                            </button>
                        </template>
                        <button  title="Ver" :data-id="props.row.id"  type="button" class="btn btn-success" @click="$modal.show('show-employee',props.row.id)">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button  title="Editar" :data-id="props.row.id" type="button" class="btn btn-info"  @click="$modal.show('edit-employee',props.row.id)">
                            <i class="fas fa-edit" aria-hidden="true"></i>
                        </button>
                    <button  title="Eliminar" :data-id="props.row.id"  class="btn btn-danger" @click="deleteRegister(props.row.id)">
                        <i class="fas fa-trash-alt"></i>
                    </button>
            </div>
        </v-server-table>
        <employee-show></employee-show>
        <employee-edit></employee-edit>
    </div>
</template>
<script>

    import text from './../tables/text.js';
    import EmployeeShow from './EmployeeShow.vue';
    import EmployeeEdit from './EmployeeEdit';
    import Swal from 'sweetalert2';
    export default {
        data(){
            return {
                options: {
                    debounce:1500,
                    perPage: 10,
                    perPageValues: [10,25,50,100],
                    filterByColumn: true,
                    headings: {
                        nombre: "Nombre",
                        ape_pat: "Apellido Paterno",
                        actions: "Acciones",
                        "user.email":"Correo",
                        human_date_created:"Fecha"
                    },
                    sortable:['title',' author','human_date_created'],
                    sortIcon :{ base:'fas float-right', up:'fa-arrow-up ', down:'fa-arrow-down', is:'fa-sort' },
                    pagination:{
                        chunk: 50,
                    },
                    texts: text,
                },
                columns:['nombre','ape_pat','user.email','human_date_created' ,'actions'],

            }
        },
        components:{
            EmployeeShow,
            EmployeeEdit
        },
        methods: {
            deleteRegister(id) {
                Swal.fire({
                    title: '¿Estas Seguro?',
                    text: "¡Si eliminas este registro ya no se podra recuperar!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Si, Eliminar!'
                }).then((result) => {
                    if (result.value) {
                        axios.delete(route('employees.destroy', [id]), {
                        }).then( () => {
                            this.$refs.table.refresh();
                        }).catch(function (error) {
                            console.log(error);
                        });
                        Swal.fire(
                            'Eliminado!',
                            'El registro se elimino correctamente.',
                            'success'
                        )
                    }
                });
            }
        }
    }
</script>


<style>
    .action-buttons {
        min-width: 100px;
    }
    .VueTables__actions-filter-wrapper{
        display: none;
    }
</style>
