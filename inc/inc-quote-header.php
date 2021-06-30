<div class="quote-form">
    <div class="quote-form-in">
        <span class="form-title">What are you moving?</span>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="q1-tab" data-toggle="tab" href="#q11" role="tab" aria-controls="q1" aria-selected="true"><i class="fal fa-home"></i><span>Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="q2-tab" data-toggle="tab" href="#q22" role="tab" aria-controls="q2" aria-selected="false"><i class="fal fa-car"></i> <span>Auto</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="q3-tab" data-toggle="tab" href="#q33" role="tab" aria-controls="q3" aria-selected="false"><i class="fal fa-car-garage"></i><span>Both</span></a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">

            <div class="tab-pane fade show active" id="q11" role="tabpanel" aria-labelledby="q1-tab">

                <?php echo do_shortcode('[contact-form-7 id="733" title="Moving Your Home"]'); ?>

            </div>
            <!-- // tab 1  -->



            <div class="tab-pane fade" id="q22" role="tabpanel" aria-labelledby="q2-tab">

                <?php echo do_shortcode('[contact-form-7 id="734" title="Moving your Car"]'); ?>

            </div>
            <!-- // tab 2  -->

            <div class="tab-pane fade" id="q33" role="tabpanel" aria-labelledby="q3-tab">

                <?php echo do_shortcode('[contact-form-7 id="735" title="Moving Both"]'); ?>

            </div>
            <!-- // tab 3  -->

        </div>
    </div>
    <!-- /.quote-form-in -->
</div>
<!-- /.quote-form -->