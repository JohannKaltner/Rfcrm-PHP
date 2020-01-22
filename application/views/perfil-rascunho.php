<div class="main-content">

    <style>
        #profile {
            display: table;
            margin: 0 auto;
            border: 1px solid grey;
            border-radius: 10px;
        }
        #profile3 {
            display: table;
            margin: 0 auto;
            border: 1px solid #333333;
            border-radius: 10px;
        }

        #profile2 {
            display: table;
            margin: 0 auto;
        }

        #foto {
            border: 1px solid grey;
        }
    </style>

    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4" id="profile">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title mb-3" id="profile2">Usuário </strong>
                        </div>
                        <div class="card-body">
                            <div class="mx-auto d-block">

                                <img id="foto" class="rounded-circle mx-auto d-block" src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_nome'); ?>.jpg" alt="Card image cap">
                                <h5 class="text-sm-center mt-2 mb-1"><?php echo $this->session->userdata('usuario_nome'); ?></h5>
                                <div class="location text-sm-center">
                                    <i class="fas fa-inbox"></i> <span class="email"><?php echo $this->session->userdata('usuario_email'); ?> </span><Br>
                                    <i class="fas fa-fax"></i> <span class="email"><?php echo $this->session->userdata('usuario_setor'); ?> </span>
                                </div>
                            </div>
                            <hr>
                            <div class="card-text text-sm-center">
                                <a href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- FIM DO CARD -->

                </div>
            </div>
        </div>
        <div class="col-lg-9" id="profile2">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning" id="profile3">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>order ID</th>
                                                <th>name</th>
                                                <th class="text-right">price</th>
                                                <th class="text-right">quantity</th>
                                                <th class="text-right">total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="text-right">$999.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$999.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-28 01:22</td>
                                                <td>100397</td>
                                                <td>Samsung S8 Black</td>
                                                <td class="text-right">$756.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$756.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-27 02:12</td>
                                                <td>100396</td>
                                                <td>Game Console Controller</td>
                                                <td class="text-right">$22.00</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right">$44.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>100395</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td class="text-right">$1199.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$1199.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-25 19:03</td>
                                                <td>100393</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="text-right">$10.00</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$30.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100392</td>
                                                <td>Smartwatch 4.0 LTE Wifi</td>
                                                <td class="text-right">$199.00</td>
                                                <td class="text-right">6</td>
                                                <td class="text-right">$1494.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-24 19:10</td>
                                                <td>100391</td>
                                                <td>Camera C430W 4k</td>
                                                <td class="text-right">$699.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$699.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-22 00:43</td>
                                                <td>100393</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="text-right">$10.00</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$30.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    </div>
</div>
</div>