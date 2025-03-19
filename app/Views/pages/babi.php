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
                                                        <td>Pork</td>
                                                        <td>1lb</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garlic Clove</td>
                                                        <td>3 chopped</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ginger</td>
                                                        <td>1 tsp</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Soy Sauce</td>
                                                        <td>1 tbs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sesame Seed Oil</td>
                                                        <td>1 tsp</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Carrots</td>
                                                        <td>3 finely chopped</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Celery</td>
                                                        <td>3 finely chopped</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Spring Onions</td>
                                                        <td>6 chopped</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wonton Skin</td>
                                                        <td>1 Packet</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Oil</td>
                                                        <td>Fry</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Water</td>
                                                        <td>Bottle</td>
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
                                    Combine pork, garlic, ginger, soy sauce, sesame oil, and vegetables in a bowl. Separate wonton skins. Place a heaping teaspoon of filling in the center of the wonton. Brush water on 2 borders of the skin, covering 1/4 inch from the edge. Fold skin over to form a triangle, sealing edges. Pinch the two long outside points together. Heat oil to 450 degrees and fry 4 to 5 at a time until golden. Drain and serve with sauce.                            </div>
                                </div>

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <iframe width="100%" height="438" src="https://www.youtube.com/embed/9h9No18ZyCI" title="Beef Rendang - Spicy &quot;Dry&quot; Curry Beef - Food Wishes" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <!-- <iframe src="https://youtu.be/Ot-dmfBaZrA" width="100%" height="400px" frameborder="0"></iframe> -->
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?= $this->endsection('content'); ?>