
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
  @include('admin.head')
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            @include('admin.sidebar')
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            @include('admin.nav')
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Accordion</h4>

              <!-- Accordion -->
              <h5 class="mt-4">Accordion</h5>
              <div class="row">
                <div class="col-md mb-4 mb-md-0">
                  <small class="text-light fw-semibold">Basic Accordion</small>
                  <div class="accordion mt-3" id="accordionExample">
                    <div class="card accordion-item active">
                      <h2 class="accordion-header" id="headingOne">
                        <button
                          type="button"
                          class="accordion-button"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionOne"
                          aria-expanded="true"
                          aria-controls="accordionOne"
                        >
                          Accordion Item 1
                        </button>
                      </h2>

                      <div
                        id="accordionOne"
                        class="accordion-collapse collapse show"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                          marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                          soufflé. Wafer gummi bears marshmallow pastry pie.
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionTwo"
                          aria-expanded="false"
                          aria-controls="accordionTwo"
                        >
                          Accordion Item 2
                        </button>
                      </h2>
                      <div
                        id="accordionTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                          dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies.
                          Jelly beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionThree"
                          aria-expanded="false"
                          aria-controls="accordionThree"
                        >
                          Accordion Item 3
                        </button>
                      </h2>
                      <div
                        id="accordionThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon
                          gingerbread marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake
                          dragée caramels. Ice cream wafer danish cookie caramels muffin.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md">
                  <small class="text-light fw-semibold">Accordion Without Arrow</small>
                  <div id="accordionIcon" class="accordion mt-3 accordion-without-arrow">
                    <div class="accordion-item card">
                      <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionIcon-1"
                          aria-controls="accordionIcon-1"
                        >
                          Accordion Item 1
                        </button>
                      </h2>

                      <div id="accordionIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                          Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                          marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                          soufflé. Wafer gummi bears marshmallow pastry pie.
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item card">
                      <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconTwo">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionIcon-2"
                          aria-controls="accordionIcon-2"
                        >
                          Accordion Item 2
                        </button>
                      </h2>
                      <div id="accordionIcon-2" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                          Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                          dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies.
                          Jelly beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item card active">
                      <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconThree">
                        <button
                          type="button"
                          class="accordion-button"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionIcon-3"
                          aria-expanded="true"
                          aria-controls="accordionIcon-3"
                        >
                          Accordion Item 3
                        </button>
                      </h2>
                      <div
                        id="accordionIcon-3"
                        class="accordion-collapse collapse show"
                        data-bs-parent="#accordionIcon"
                      >
                        <div class="accordion-body">
                          Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon
                          gingerbread marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake
                          dragée caramels. Ice cream wafer danish cookie caramels muffin.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Accordion -->

              <!--/ Advance Styling Options -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('admin.footer')
  </body>
</html>
