<!--Estilos en obras.css-->

<?php function pasaObras ($obraAnterior, $obraSiguiente) {
echo'
<div class="anterior-siguiente">
<a class="boton-pasa-obra"  style="text-decoration: none; color: #e7dbc5" href="' . $obraAnterior . '">
<div class="pasa-obra obra-anterior"> anterior</div>
</a>

  <a class="boton-pasa-obra"  style="text-decoration: none; color: #e7dbc5" href="' . $obraSiguiente . '">
  <div class="pasa-obra"> siguiente</div>
  </a>
  </div>';
  }


function atrasBoton () {
  echo'
  
  <a href="../index.php#obras">
  <div  class="boton-pasa-obra pasa-obra-anterior atras"> <svg width="45px" height="25px" viewBox="0 0 92 55" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M76.031 42.0797L76.031 39.5797L76.031 42.0797ZM86.0005 31.2994L88.4929 31.1043L88.4929 31.1043L86.0005 31.2994ZM85.5777 25.8965L88.07 25.7015L88.07 25.7015L85.5777 25.8965ZM75.6082 16.6769L75.6082 14.1769L75.6081 14.1769L75.6082 16.6769ZM35 14.1769C33.6193 14.1769 32.5 15.2962 32.5 16.6769C32.5 18.0576 33.6193 19.1769 35 19.1769L35 14.1769ZM13 44.5797L76.031 44.5797L76.031 39.5797L13 39.5797L13 44.5797ZM88.4929 31.1043L88.07 25.7015L83.0853 26.0916L83.5082 31.4945L88.4929 31.1043ZM75.6081 14.1769L35 14.1769L35 19.1769L75.6082 19.1769L75.6081 14.1769ZM88.07 25.7015C87.5609 19.1961 82.1334 14.1769 75.6082 14.1769L75.6082 19.1769C79.5233 19.1769 82.7798 22.1884 83.0853 26.0916L88.07 25.7015ZM76.031 44.5797C83.319 44.5797 89.0616 38.3701 88.4929 31.1043L83.5082 31.4945C83.8494 35.8539 80.4038 39.5797 76.031 39.5797L76.031 44.5797Z" fill="#E7DBC5"/>
  <path d="M6.03002 19.2428C3.72479 18.1417 3.76284 14.8471 6.09289 13.7996L31.5912 2.33602C33.59 1.4374 35.8465 2.9155 35.8211 5.10686L35.5496 28.6198C35.5243 30.8111 33.2343 32.2367 31.2568 31.2922L6.03002 19.2428Z" fill="#E7DBC5"/>
  </svg>  
   </div> </a>
';
}

function botonCierraObras () {
  echo'

  <div  class="pasa-obra-anterior boton-cerrar-seccion"> <svg width="20px" height="20px" viewBox="0 0 40 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <g class="icono-cruz" id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g id="Group">
          <g id="Oval-2" opacity="0" fill="#C14953">
              <ellipse id="Oval" cx="20" cy="16.5" rx="20" ry="16.5"></ellipse>
          </g>
          <line x1="10.3030303" y1="7.425" x2="29.6969697" y2="25.905" id="Line-2" stroke="#E7DBC5" stroke-width="8" fill="#E7DBC5" stroke-linecap="square"></line>
          <line x1="10.3030303" y1="25.905" x2="29.9599158" y2="7.17444524" id="Line" stroke="#E7DBC5" stroke-width="8" fill="#D8D8D8" stroke-linecap="square"></line>
      </g>
  </g>
</svg>
   </div>';
}


function barraBotonesCelular ($obraAnterior, $obraSiguiente ) {

  echo'
    <div class=contenedor-barra-celular>
    <div class="boton-celular anterior"> 
    <a class="boton-pasa-obra"  style="text-decoration: none; color: #e7dbc5" href="' . $obraAnterior. '">
    <svg  class="" width="25px" height="25px" viewBox="0 0 28 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(0.500000, 0.500000)" fill="#E7DBC5">
            <path d="M17.1040067,6.98524464 L23.7385773,20.7647375 C24.6969363,22.7551755 23.860271,25.1456477 21.8698331,26.1040067 C21.3284931,26.3646519 20.7353909,26.5 20.1345706,26.5 L6.86542935,26.5 C4.65629035,26.5 2.86542935,24.709139 2.86542935,22.5 C2.86542935,21.8991797 3.00077746,21.3060776 3.26142267,20.7647375 L9.89599332,6.98524464 C10.8543523,4.99480671 13.2448245,4.15814144 15.2352625,5.11650044 C16.0519099,5.50970103 16.7108061,6.16859725 17.1040067,6.98524464 Z" id="Triangle-Copy" transform="translate(13.500000, 13.000000) scale(1, -1) rotate(-90.000000) translate(-13.500000, -13.000000) "></path>
        </g>
    </g>
</svg>
    </a></div>
  
  <div class="contenedor-icono-celular">
  <a href="../index.php#titulo-principal">
  <svg width="60" height="45" viewBox="0 0 148 141" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="33.4891" y="74.0588" width="79.9416" height="34.9412" rx="5" fill="#E7DBC5"/>
<path d="M70.7305 30.8259C72.6081 29.203 75.3919 29.203 77.2695 30.8259L127.924 74.6069C131.428 77.6357 129.286 83.3897 124.655 83.3897H23.3454C18.7136 83.3897 16.5716 77.6357 20.0759 74.6068L70.7305 30.8259Z" fill="#E7DBC5"/>
<path d="M63.7372 92.5588C63.7372 89.7974 65.9758 87.5588 68.7372 87.5588H78.1825C80.9439 87.5588 83.1825 89.7974 83.1825 92.5588V109H63.7372V92.5588Z" fill="#C14953"/>
<path d="M28.8182 140V116.727H31.6364V127.091H44.0455V116.727H46.8636V140H44.0455V129.591H31.6364V140H28.8182ZM72.142 128.364C72.142 130.818 71.6989 132.939 70.8125 134.727C69.9261 136.515 68.7102 137.894 67.1648 138.864C65.6193 139.833 63.8542 140.318 61.8693 140.318C59.8845 140.318 58.1193 139.833 56.5739 138.864C55.0284 137.894 53.8125 136.515 52.9261 134.727C52.0398 132.939 51.5966 130.818 51.5966 128.364C51.5966 125.909 52.0398 123.788 52.9261 122C53.8125 120.212 55.0284 118.833 56.5739 117.864C58.1193 116.894 59.8845 116.409 61.8693 116.409C63.8542 116.409 65.6193 116.894 67.1648 117.864C68.7102 118.833 69.9261 120.212 70.8125 122C71.6989 123.788 72.142 125.909 72.142 128.364ZM69.4148 128.364C69.4148 126.348 69.0777 124.648 68.4034 123.261C67.7367 121.875 66.8314 120.826 65.6875 120.114C64.5511 119.402 63.2784 119.045 61.8693 119.045C60.4602 119.045 59.1837 119.402 58.0398 120.114C56.9034 120.826 55.9981 121.875 55.3239 123.261C54.6572 124.648 54.3239 126.348 54.3239 128.364C54.3239 130.379 54.6572 132.08 55.3239 133.466C55.9981 134.852 56.9034 135.902 58.0398 136.614C59.1837 137.326 60.4602 137.682 61.8693 137.682C63.2784 137.682 64.5511 137.326 65.6875 136.614C66.8314 135.902 67.7367 134.852 68.4034 133.466C69.0777 132.08 69.4148 130.379 69.4148 128.364ZM76.8807 116.727H80.2443L88.1534 136.045H88.4261L96.3352 116.727H99.6989V140H97.0625V122.318H96.8352L89.5625 140H87.017L79.7443 122.318H79.517V140H76.8807V116.727ZM105.349 140V116.727H119.395V119.227H108.168V127.091H118.668V129.591H108.168V137.5H119.577V140H105.349Z" fill="#E7DBC5"/>
</svg>
</a>
  
  
</div>

     <div class="boton-celular siguiente">
    <a class="boton-pasa-obra"  style="text-decoration: none; color: #e7dbc5" href="' . $obraSiguiente . '">
    <svg class="" id="boton-critica-siguiente" width="25px" height="25px" viewBox="0 0 28 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g  id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(0.500000, 0.500000)" fill="#E7DBC5">
            <path d="M17.1040067,6.98524464 L23.7385773,20.7647375 C24.6969363,22.7551755 23.860271,25.1456477 21.8698331,26.1040067 C21.3284931,26.3646519 20.7353909,26.5 20.1345706,26.5 L6.86542935,26.5 C4.65629035,26.5 2.86542935,24.709139 2.86542935,22.5 C2.86542935,21.8991797 3.00077746,21.3060776 3.26142267,20.7647375 L9.89599332,6.98524464 C10.8543523,4.99480671 13.2448245,4.15814144 15.2352625,5.11650044 C16.0519099,5.50970103 16.7108061,6.16859725 17.1040067,6.98524464 Z" id="Triangle-Copy" transform="translate(13.500000, 13.000000) scale(1, -1) rotate(-90.000000) translate(-13.500000, -13.000000) "></path>
        </g>
    </g>
</svg>
    </a>
    </div>

    </div>
  ';
}



?>
