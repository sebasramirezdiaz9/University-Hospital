<template>
    <div>
       <v-server-table :url="$route('patients.index')" :columns="columns" ref="table" :options="options" :filterByColumn="true" >
            <div slot="actions" slot-scope="props" class="action-buttons">
                        <button  title="Ver" :data-id="props.row.id"  type="button" class="btn btn-success" @click="$modal.show('show-patient',props.row.id)">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button  title="Editar" :data-id="props.row.id" type="button" class="btn btn-info"  @click="$modal.show('edit-patient',props.row.id)">
                            <i class="fas fa-edit" aria-hidden="true"></i>
                        </button>
                    <button  title="Eliminar" :data-id="props.row.id"  class="btn btn-danger" @click="deleteRegister(props.row.id)">
                        <i class="fas fa-trash-alt"></i>
                    </button>
            </div>
        </v-server-table>
        <patients-show></patients-show>
         <patients-edit></patients-edit>
    </div>
</template>
<script>

    import text from './../tables/text.js';
    import PatientsShow from './PatientsShow.vue';
    import PatientsEdit from './PatientsEdit';
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
                        name: "Nombre",
                        actions: "Acciones",
                        ape_pat:"Apellido Paterno",
                        ape_mat:"Apellido Materno",
                        human_date_created:"Fecha"
                    },
                    sortable:['title',' author','human_date_created'],
                    sortIcon :{ base:'fas float-right', up:'fa-arrow-up ', down:'fa-arrow-down', is:'fa-sort' },
                    pagination:{
                        chunk: 50,
                    },
                    texts: text,
                },
                columns:['name','ape_pat','ape_mat','human_date_created' ,'actions'],

            }
        },
        components:{
            PatientsShow,
            PatientsEdit
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
                        axios.delete(route('patients.destroy', [id]), {
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
