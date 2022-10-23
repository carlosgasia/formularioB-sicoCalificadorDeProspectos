
let btnAgregar1 = document.getElementById('add-campo-btn1'),
i =1, inputPrograma = document.getElementsByClassName('input-programa'),
inputProgramaRecibir = document.getElementsByClassName('input-programa-recibir'),
btnAgregar = document.getElementById('add-campo-btn'),
tableTipoOrganizacion = document.getElementById('tipo-organizacion'),
tableTipo2 = document.getElementById('tipo-organizacion2'),
fieldsetMain = document.getElementById('fieldset-main');

let ii = 1;



const nombrePrograma = function (numero) {

 
       inputProgramaRecibir[numero].value = inputPrograma[numero].value;
    

};

if(btnAgregar1 != null){


btnAgregar1.addEventListener('click',(e)=>{
    e.preventDefault();
    i++;
    let newInput = document.createElement("div");
    newInput.innerHTML = `
    <label for="nombreProgramaActividad${i}">Nombre del programa/Actividad nº${i}: </label>
    <input type="text" id="nombreProgramaActividad${i}" name="nombreProgramaActividad${i}" onchange="nombrePrograma(${i-1})" class="inside-table-form input-programa" style="max-width: 250px;">
    `;

    fieldsetMain.insertBefore(newInput,btnAgregar1);




    // Agregar un campo a la tabla
    let newTr = document.createElement("div");
    newTr.innerHTML = ` 
                        <div style="overflow-x:auto">

                        <div class="table-responsive">
                        <table class="table" id="tipo-organizacion2">
                        
                            <tr>
                                <th>Alcance</th>
                                <td>
                                    <select  name="alcanceProgramaActividad${i}" style="margin-left: 5px;" class="inside-table-form">
                                        <option disabled selected>---Pulse para seleccionar---</option>
                                        <option value="Nacional">Nacional (N)</option>
                                        <option value="Estadal">Estadal (E)</option>

                                        </select>

                                </td>
                                
                            </tr>

                            <tr>
                                <th>
                                Municipio
                                </th>
                                <td>
                                    <select  name="municipioProgramaActividad${i}" style="margin-left: 5px;" class="inside-table-form">
                                        <option disabled selected>---Pulse para seleccionar---</option>
                                        <option value="Bejuma">Bejuma</option>
                                        <option value="Carlos Arvelo">Carlos Arvelo</option>
                                        <option value="Diego Ibarra">Diego Ibarra</option>
                                        <option value="Guacara">Guacara</option>
                                        <option value="Juan Jose Mora">Juan José Mora</option>
                                        <option value="Libertador">Libertador</option>
                                        <option value="Los Guayos">Los Guayos</option>
                                        <option value="Miranda">Miranda</option>
                                        <option value="Montalban">Montalbán</option>
                                        <option value="Naguanagua">Naguanagua</option>
                                        <option value="Puerto Cabello">Puerto Cabello</option>
                                        <option value="San Diego">San Diego</option>
                                        <option value="San Joaquin">San Joaquín</option>
                                        <option value="Valencia">Valencia</option>
                                        <option value="Mas de 1 Municipio">Más de 1 municipio</option>


                                        </select>
                            </tr>

                            <tr>
                                <th>Sector</th>
                                <td>
                                    <select  name="sectorProgramaActividad${i}" style="margin-left: 5px;" class="inside-table-form">
                                        <option disabled selected>---Pulse para seleccionar---</option>
                                        <option value="Alimentación">Alimentación</option>
                                        <option value="Salud">Salud</option>
                                        <option value="Educación">Educación</option>
                                        <option value="Emprendimiento">Emprendimiento</option>
                                    </select>
                            </td>
                            
                            </tr>

                            <tr>
                                <th>Otro sector</th>
                                <td><input type="text" name="otroSectorProgramaActividad${i}" class="inside-table-form" placeholder="(Opcional)" style="margin-left: 5px;"></td>
                            </tr>


                        </table>
                        
                        </div>
                        <table style="overflow-x:auto">
                        
                        
                        </table>
                    </div>
                        `;


                        
    fieldsetMain.insertBefore(newTr,btnAgregar1);



    let newTRr = document.createElement("tr");
    newTRr.innerHTML = ` 
    
    <tr>
    <td><input type="text" disabled style="background-color: transparent;" class="inside-table-form input-programa-recibir"></td>
    <td>
      <select  name="tipo_organizacionProgramaActividad${i}" style="margin-left: 5px;" class="inside-table-form">
        <option disabled selected>---Pulse para seleccionar---</option>
        <option value="ONG">ONG</option>
        <option value="Organismo Publico">Organismo público</option>
        <option value="Embajada">Embajada</option>
        <option value="Empresa privada">Empresa privada</option>
        <option value="Sin alianzas">Sin alianzas</option>


      </select>
    </td>
   
  </tr>`;

    tableTipoOrganizacion.appendChild(newTRr);
    
    if(i == 5){
        fieldsetMain.removeChild(btnAgregar1)
    }

});
}

let btnBorrar = document.getElementsByClassName('btn-eliminar');

function mostrarElemento(id){
    window.location.href = `mostrar_vermas.php?id=${id}`;
}

function borrarElemento(id){
    if(confirm('¿Seguro desea borrar el registro seleccionado?')){

        window.location.href = `borrar.php?id=${id}`;

    }



}

// notifications
/**
 * @param String name
 * @return String
 */
 function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

if(getParameterByName('delete') != ''){
    let notification = getParameterByName('delete');

if(notification === 'success'){

    let newNotification = document.createElement("div");
    newNotification.className = 'success notifications';
    newNotification.id = "thing";
    newNotification.innerHTML = `<p>Borrado con éxito!</p>`;
    document.querySelector('body').insertBefore(newNotification,document.querySelector('header'));

    // efectoFade
    let s = document.getElementById('thing').style;
        s.opacity = 1;

        setTimeout(() => {
            (function fade(){(s.opacity-=.1)<0?s.display="none":setTimeout(fade,20)})();
            
        }, 2000);


}else{
    let newNotification = document.createElement("div");
    newNotification.className = 'error_notification notifications';
    newNotification.id = "thing";
    newNotification.innerHTML = `<p>Hubo un error!</p>`;
    document.querySelector('body').insertBefore(newNotification,document.querySelector('header'));

    // efectoFade
    let s = document.getElementById('thing').style;
        s.opacity = 1;

        setTimeout(() => {
            (function fade(){(s.opacity-=.1)<0?s.display="none":setTimeout(fade,20)})();
            
        }, 2000);

}

}
