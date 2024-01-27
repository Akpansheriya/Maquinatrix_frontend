<?php include 'header.php' ?>
<?php include 'menu.php' ?>


<div class="user-details-container">
  <div class="d-flex align-items-start ">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <p class="menu-text">MENÚ DE CUENTA</p>
      <!-- <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"> <img src="./assets/img/profile2.png" alt="profile2">  Mi cuenta</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"> <img src="./assets/img/note.png" alt="note">  Mis Publicaciones</button> -->

      <button class="nav-link " id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
        role="tab" aria-controls="v-pills-home" aria-selected="true">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24"
          viewBox="0 0 24 24">
          <defs>
            <clipPath id="clip-path-home">
              <rect id="Rectángulo_10764" data-name="Rectángulo 10764" width="24" height="24"
                transform="translate(-12719 -23540)" fill="#62646a" stroke="#707070" stroke-width="1" />
            </clipPath>
          </defs>
          <g id="Enmascarar_grupo_57911" data-name="Enmascarar grupo 57911" transform="translate(12719 23540)"
            clip-path="url(#clip-path-home)">
            <g id="person-circle" transform="translate(-12719 -23540)">
              <path id="Trazado_63455" data-name="Trazado 63455" d="M16.5,9A4.5,4.5,0,1,1,12,4.5,4.5,4.5,0,0,1,16.5,9Z"
                fill="#62646a" />
              <path id="Trazado_63456" data-name="Trazado 63456"
                d="M0,12A12,12,0,1,1,12,24,12,12,0,0,1,0,12ZM12,1.5A10.5,10.5,0,0,0,3.8,18.555C4.863,16.839,7.207,15,12,15s7.135,1.838,8.2,3.555A10.5,10.5,0,0,0,12,1.5Z"
                fill="#62646a" fill-rule="evenodd" />
            </g>
          </g>
        </svg>
        Mi cuenta
      </button>

      <button class="nav-link" id="v-pills-profile-tab" type="button" role="tab" data-bs-toggle="pill"
        data-bs-target="#v-pills-profile" aria-controls="v-pills-profile" aria-selected="false">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24"
          viewBox="0 0 24 24">
          <defs>
            <clipPath id="clip-path-profile">
              <rect id="Rectángulo_10913" data-name="Rectángulo 10913" width="24" height="24"
                transform="translate(-12646 -23409)" fill="#62646a" stroke="#707070" stroke-width="1" />
            </clipPath>
          </defs>
          <g id="Enmascarar_grupo_57916" data-name="Enmascarar grupo 57916" transform="translate(12646 23409)"
            clip-path="url(#clip-path-profile)">
            <g id="card-list" transform="translate(-12646 -23409)">
              <path id="Trazado_63465" data-name="Trazado 63465"
                d="M21.75,4.5a.75.75,0,0,1,.75.75v13.5a.75.75,0,0,1-.75.75H2.25a.75.75,0,0,1-.75-.75V5.25a.75.75,0,0,1,.75-.75ZM2.25,3A2.25,2.25,0,0,0,0,5.25v13.5A2.25,2.25,0,0,0,2.25,21h19.5A2.25,2.25,0,0,0,24,18.75V5.25A2.25,2.25,0,0,0,21.75,3Z"
                fill="#62646a" />
              <path id="Trazado_63466" data-name="Trazado 63466"
                d="M7.5,12a.75.75,0,0,1,.75-.75h10.5a.75.75,0,0,1,0,1.5H8.25A.75.75,0,0,1,7.5,12Zm0-3.75a.75.75,0,0,1,.75-.75h10.5a.75.75,0,0,1,0,1.5H8.25A.75.75,0,0,1,7.5,8.25Zm0,7.5A.75.75,0,0,1,8.25,15h10.5a.75.75,0,0,1,0,1.5H8.25A.75.75,0,0,1,7.5,15.75ZM6,8.25a.75.75,0,1,1-.75-.75A.75.75,0,0,1,6,8.25ZM6,12a.75.75,0,1,1-.75-.75A.75.75,0,0,1,6,12Zm0,3.75A.75.75,0,1,1,5.25,15,.75.75,0,0,1,6,15.75Z"
                fill="#62646a" />
            </g>
          </g>
        </svg>
        Mis Publicaciones
      </button>
      <button class="publication-create-btn" data-bs-toggle="modal" data-bs-target="#exampleModalPublication">+ Crear
        Publicación</button>
    </div>
    <div class="tab-content content" id="v-pills-tabContent ">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
        tabindex="0">...</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
        tabindex="0">...</div>

    </div>
  </div>
</div>

<?php include 'publication_type.php' ?>


<?php include 'footer.php' ?>


<script>

  function getQueryParam(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
  }
  var tab = getQueryParam('tab');
  console.log("tab", tab);
  function setActiveClass(tabName) {
    return tab === tabName ? "nav-link active" : "nav-link";
  }
  var homeTabButton = document.getElementById("v-pills-home-tab");
  homeTabButton.className = setActiveClass('profile');

  var profileTabButton = document.getElementById("v-pills-profile-tab");
  profileTabButton.className = setActiveClass('publication');
</script>