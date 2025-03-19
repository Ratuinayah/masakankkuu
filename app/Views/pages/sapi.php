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
                                                        <td>Beef</td>
                                                        <td>1lb</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vegetable Oil</td>
                                                        <td>5 tbs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cinnamon Stick</td>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cloves</td>
                                                        <td>3</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Star Anise</td>
                                                        <td>3</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cardamom</td>
                                                        <td>3</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Coconut Cream</td>
                                                        <td>1 cup</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Water</td>
                                                        <td>1 cup</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tamarind Paste</td>
                                                        <td>2 tbs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lime</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sugar</td>
                                                        <td>1 tbs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Challots</td>
                                                        <td>5</td>
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
                                    Chop the spice paste ingredients and then blend it in a food processor until fine. Heat the oil in a stew pot, add the spice paste, cinnamon, cloves, star anise, and cardamom and stir-fry until aromatic. Add the beef and the pounded lemongrass and stir for 1 minute. Add the coconut milk, tamarind juice, water, and simmer on medium heat, stirring frequently until the meat is almost cooked. Add the kaffir lime leaves, kerisik (toasted coconut), sugar or palm sugar, stirring to blend well with the meat. Lower the heat to low, cover the lid, and simmer for 1 to 1 1/2 hours or until the meat is really tender and the gravy has dried up. Add more salt and sugar to taste. Serve immediately with steamed rice and save some for overnight.
                                </div>
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