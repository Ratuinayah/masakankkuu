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
                                                        <td>Butter</td>
                                                        <td>100g</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lamb</td>
                                                        <td>900g</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lamb Kidney</td>
                                                        <td>3</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Onions</td>
                                                        <td>2 medium</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Plain Flour</td>
                                                        <td>2 tablespoons</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bay Leaves</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Potatoes</td>
                                                        <td>900g</td>
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
                                    Heat oven to 160C/fan 140C/gas 3. Heat some dripping or butter in a large shallow casserole dish, brown the lamb in batches, lift to a plate, then repeat with the kidneys. Fry the onions and carrots in the pan with a little more dripping until golden. Sprinkle over the flour, allow to cook for a couple of mins, shake over the Worcestershire sauce, pour in the stock, then bring to the boil. Stir in the meat and bay leaves, then turn off the heat. Arrange the sliced potatoes on top of the meat, then drizzle with a little more dripping. Cover, then place in the oven for about 1½ hrs until the potatoes are cooked. Remove the lid, brush the potatoes with a little more dripping, then turn the oven up to brown the potatoes, or finish under the grill for 5-8 mins until brown.
                                </div>

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <iframe width="100%" height="438" src="https://www.youtube.com/embed/w6TS5J8YRA4" title="Beef Rendang - Spicy &quot;Dry&quot; Curry Beef - Food Wishes" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <!-- <iframe src="https://youtu.be/Ot-dmfBaZrA" width="100%" height="400px" frameborder="0"></iframe> -->
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?= $this->endsection('content'); ?>