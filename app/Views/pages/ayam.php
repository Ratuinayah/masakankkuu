<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<br>

<!-- Begin Page Content -->
<div class="container-fluid">
    
                    <!-- Content Row -->
                    <div class="row">
                        
                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Bahan-bahan</h6>
                                    </div>                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Bahan</th>
                                                            <th>Takaran</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Chicken Breast</td>
                                                        <td>4 pounded to 1cm thickness</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Plain Flour</td>
                                                        <td>2 tablespoons</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Egg</td>
                                                        <td>1 beaten</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Breadcrumbs</td>
                                                        <td>100g fine</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vegetable Oil</td>
                                                        <td>230ml frying</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sunflower Oil</td>
                                                        <td>2 tablespoons</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Onions</td>
                                                        <td>2 sliced</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garlic</td>
                                                        <td>5 chopped cloves</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Carrot</td>
                                                        <td>2 sliced</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Plain Flour</td>
                                                        <td>2 tablespoons</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Curry Powder</td>
                                                        <td>4 teaspoons</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chicken Stock</td>
                                                        <td>600ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Honey</td>
                                                        <td>2 teaspoons</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Soy Sauce</td>
                                                        <td>4 teaspoons</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bay Leaf</td>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garam Masala</td>
                                                        <td>1 teaspoon</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                    </div>
                                </div>
        
                        <div class="col-xl-8 col-lg-7">

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Petunjuk</h6>
                                </div>
                                <div class="card-body">
                                    Prep:15min › Cook:30min › Ready in:45min For the curry sauce: Heat oil in medium non-stick saucepan, add onion and garlic and cook until softened. Stir in carrots and cook over low heat for 10 to 12 minutes. Add flour and curry powder; cook for 1 minute. Gradually stir in stock until combined; add honey, soy sauce and bay leaf. Slowly bring to the boil. Turn down heat and simmer for 20 minutes or until sauce thickens but is still of pouring consistency. Stir in garam masala. Pour the curry sauce through a sieve; return to saucepan and keep on low heat until ready to serve. For the chicken: Season both sides of chicken breasts with salt and pepper. Place flour, egg and breadcrumbs in separate bowls and arrange in a row. Coat the chicken breasts in flour, then dip them into the egg, then coat in breadcrumbs, making sure you cover both sides. Heat oil in large frying pan over medium-high heat. Place chicken into hot oil and cook until golden brown, about 3 or 4 minutes each side. Once cooked, place on kitchen paper to absorb excess oil. Pour curry sauce over chicken, serve with white rice and enjoy!                                </div>
                            </div>

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <iframe width="100%" height="438" src="https://www.youtube.com/embed/MWzxDFRtVbc" title="Beef Rendang - Spicy &quot;Dry&quot; Curry Beef - Food Wishes" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <!-- <iframe src="https://youtu.be/Ot-dmfBaZrA" width="100%" height="400px" frameborder="0"></iframe> -->
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?= $this->endsection('content'); ?>