<?php $title = 'Accueil'?>
        <div class="row">
            <div class="col-md-12">

            <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li><a href="#tab_histo" data-toggle="tab">Historiques</a></li>
              <li><a href="#tab_attente" data-toggle="tab">Formations en attentes</a></li>
              <li class="active"><a href="#tab_formations" data-toggle="tab">Formations proposées</a></li>

            </ul>
            <div class="tab-content">

                <?= tabsFormations::Historic($FormHisto,"histo","histo")?>
                <?= tabsFormations::Waiting($FormAtt,"attente","attente")?>
                <?= tabsFormations::Offer($Form,"formations","propose")?>
            </div>
            <!-- /.tab-content -->
          </div>

          </div>
          </div>





     <div class="clearfix"></div>
