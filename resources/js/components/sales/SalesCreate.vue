<template>
   <div>
        <div class="text-right">
            <button type="button" class="btn btn-primary btn-rounded m-1" @click="$modal.show('create-sales')">
                Registrar Venta.
            </button>
        </div>
        <modal name="create-sales" height="auto" width="50%" @before-open="beforeOpen" :scrollable="true">
                <alv-form :action="route('sales.store')" method="post" id="createPatients" :spinner="true" @after-done="afterDone" autocomplete="off" :data-object="sale" ref="alv-form" >
                    <div class="modal-header">
                        <h5 class="modal-title"><strong>Registrar Venta</strong></h5>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" @click="$modal.hide('create-sales')">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                  <div class="row">
                          <div class="col-md-12">
                              <div class="alert alert-info" role="alert">
                               Información de la venta
                                </div>
                          </div>
                      </div>
                       <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Folio</label>
                             <input type="text" class="form-control" id="name" name="name" v-model="sale.folio" >
                        </div>
                    </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Subtotal</label>
                            <input type="text" class="form-control" id="name" name="name" v-model="sale.subtotal" >
                        </div>
                    </div>
                </div> <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Fecha</label>
                              <flat-pickr v-model="sale.fecha" :config="config" name="fecha" class="form-control"></flat-pickr>
                        </div>
                    </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Total</label>
                            <input type="text" class="form-control" id="name" name="name" v-model="sale.total" >
                        </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Método de Pago</label>
                             <v-select v-model="method" :options="methods.map(i=>({ label:i.nombre, code:i.id }))" name="method_type_id"></v-select>
                        </div>
                    </div>
                </div><hr>
                <div v-for="(medicine,i) in sale.medicines" :key="i">
                     <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Medicamento</label>
                             <v-select
                                v-model="medicament[i]"
                                :name="'sale.' + i + '.medicamento_id'" id="medicamento_id"
                                 @input="onChangeMedicine(medicament[i],i)"
                                 :options="medicines.map(i=>({ label:i.activo + ' ' +i.presentacion, code:i.id }))"></v-select>
                        </div>
                    </div><br>
                    <div class="col-md-3">
                        <div class="form-group">
                                <button @click="addMedicine()" title="Agregar tarea" id="button" type="button" class="btn btn-outline-success btn-icon mt-4">
                                    <i class="fas fa-plus"></i>
                                </button>
                        </div>
                    
                    </div><br>
                     <div class="col-md-3">
                       <div class="form-group">
                                <button v-if="sale.medicines.length > 1" @click="removeMedicine(i)" title="Agregar tarea" id="button" type="button" class="btn btn-outline-danger btn-icon mt-4">
                                    <i class="fas fa-trash"></i>
                                </button>
                        </div>
                    </div>
                </div>
                   <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Cantidad</label>
                            <input type="text" class="form-control" id="name" name="name" v-model="sale.medicines[i].cantidad" >
                        </div>
                    </div>
                </div>
                </div>
                    </div>        
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </alv-form>
            </modal>
    </div>
</template>
<script>
   export default {
        
        data(){
            return {
                medicines: [],
                medicament: [],
                sale:
                {
                   medicines: [{
                       medicine_id:'',
                       cantidad: ''
                   }]
                },
                method: 0,
                methods: [],
                config:{
                    altInput: true,
                    altFormat: "F j, Y",
                    dateFormat: "Y-m-d",
                }
            }
        },
        created()
        {
            this.getMethods();
            this.getMedicines();
        },
        methods: {
             afterDone(response){
               if(response)
                 {
                    //this.showToastr({type: 'success', title: 'Exito', message: 'El usuario se creó correctamente'});
                    
                    window.location = this.route('sales.view');
                 }
            },
            addMedicine()
            {
                this.sale.medicines.push({medicine_id: ''});
            },
            removeMedicine(index)
            {
                this.sale.medicines.splice(index,1);
            },
            onChangeMedicine(medicine, index){
                this.sale.medicines[index].medicine_id = medicine.code;
            },
            beforeOpen()
            {
                this.sale.paciente_id = '';
                this.sale.medicines = [{
                       medicine_id:'',
                   }];
            },
            getMethods()
            {
                axios.get(this.$route('methods.all')).then((response) =>
                {
                    this.methods = response.data;
                });
            },
            getMedicines()
            {
                axios.get(this.$route('medicines.all')).then((response) =>
                {
                    this.medicines = response.data;
                });
            },
        },
        watch:{
            method()
            {
                if(this.method != null)
                {
                    this.sale.method_id = this.method.code;
                }
            },
        }
    }
</script>