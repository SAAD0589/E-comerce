<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
      
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-normal mb-0 text-black">YOUR PRODUCTS
                </h3>
              </div>
              {{-- afficher le produit est la quantite de produit --}}
              @foreach ($produits as $produit)
              <div class="card rounded-3 mb-4">
                <div class="card-body p-4">
                  <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src={{$produit->imageProduct}}
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                      <p class="lead fw-normal mb-2">{{$produit->nameProduct}}</p>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    </div>
                    <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">

                    <div class="d-flex justify-content-between px-x">
                      <p class="fw-bold">Total Quantite</p>
                      <p class="fw-bold">{{$produit->quantité}}</p>
                    </div>
                    <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                      <h5 class="fw-bold mb-0">Total:</h5>
                      <h5 class="fw-bold mb-0">{{$produit->TotalPrix}}DH</h5>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
    </x-app-layout>
    