<div class="row justify-content-center">
    <div class="col-md-8">
        <?php echo $this->session->userdata('pesan') ?>
        <div class="card card-body">
            
            <div class="row">
                <div class="col-md-4">
                    <?php echo svg() ?>
                </div>
                <div class="col-md-8">

                    <h3>Laporkan Hoax</h3>
                    <p>Tambahkan laporan apabila terjadi hoax</p>

                    <form action="<?php echo base_url('main/proseslaporan') ?>" method="post">

                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder=". . ." required="" />
                            <small>Masukkan nama pelapor</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder=". . ." required="" />
                            <small>Masukkan nama pelapor</small>
                        </div>

                        <hr>

                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" name="judul" class="form-control" placeholder=". . ." required="" />
                            <small>Masukkan judul laporan</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Isi</label>
                            <textarea name="isi" class="form-control" placeholder=". . ." required=""></textarea>
                            <small>Masukkan isi laporan</small>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Sumber</label>
                                    <input type="text" name="sumber" class="form-control" placeholder="Instagram, Twitter, atau Facebook . . ." />
                                    <small>Masukkan sumber</small>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Bukti</label>
                                    <input type="text" name="bukti" class="form-control" placeholder="https://..." />
                                    <small>Masukkan bukti</small>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="">Label Hoax or Fact</label>
                            <div class="radio-inline">
                                <label class="radio radio-danger">
                                    <input type="radio" name="label" value="FAKE" />
                                    <span></span>
                                    Hoax
                                </label>
                                <label class="radio radio-success">
                                    <input type="radio" name="label" value="TRUE" checked/>
                                    <span></span>
                                    Fact
                                </label>
                            </div>
                            <small>Pilih label diatas</small>
                        </div>


                        <div class="form-group">
                            <button type="reset" class="btn btn-light-primary">Reset Form</button>
                            <button class="btn btn-primary">Simpan Laporan</button>
                        </div>
                        
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<?php 

    function svg() {

        return '<svg style="width: 200px" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 669.17503 511.62846" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M889.31431,635.23013l1.14386-25.71948a83.06565,83.06565,0,0,1,38.74475-9.8078c-18.60845,15.21374-16.28295,44.54071-28.899,64.99963a49.96442,49.96442,0,0,1-36.63941,23.08923l-15.5722,9.53437a83.72447,83.72447,0,0,1,17.647-67.8451,80.87424,80.87424,0,0,1,14.863-13.81018C884.33183,625.505,889.31431,635.23013,889.31431,635.23013Z" transform="translate(-265.41249 -194.18577)" fill="#f2f2f2"/><path d="M653.17331,703.72856c-7.93145-.56438-10,1-22,0h-22l2.86191-52.6484,34.63431,13.87845,172.114,4.22526-.10092.29182c-.07793.22491-7.71944,22.57717-1.74624,31.04161l.24761.3502-.48329.00471L658.81292,702.32C657.0891,702.33576,654.88343,703.85025,653.17331,703.72856Z" transform="translate(-265.41249 -194.18577)" fill="#f2f2f2"/><path d="M662.10072,704.41691c-15.3216-1.09024-31.18673,4.86614-44.42775-1.85825l-10.5846.64107-.03005-.08908c-.08209-.24412-5.08221-39.58569,5.02571-54.83946l.44523-.67165.34761,3.61319-3.33235,49.008,7.38552-2.46491c17.93717,8.44269,39.26965,2.86708,59.79952,2.78923l139.71444-.51636c2.92672-.00979,5.36473,1.98989,5.44261,4.45873l.00755.24112L670.53969,704.717Q666.30584,704.71659,662.10072,704.41691Z" transform="translate(-265.41249 -194.18577)" fill="#ccc"/><polygon points="543.667 485.616 386.44 482.491 386.279 482.431 349.132 468.509 349.834 466.636 386.821 480.499 543.707 483.616 543.667 485.616" fill="#e6e6e6"/><polygon points="542.828 494.035 385.601 490.91 385.441 490.85 348.293 476.928 348.995 475.055 385.983 488.918 542.868 492.035 542.828 494.035" fill="#e6e6e6"/><polygon points="541.989 502.455 384.762 499.329 384.602 499.269 347.454 485.346 348.156 483.473 385.144 497.337 542.029 500.455 541.989 502.455" fill="#e6e6e6"/><path d="M663.18682,669.72745a105.2174,105.2174,0,0,1-41.73336-11.7754l-10.89789-5.78026.28472-2.8575a1.72931,1.72931,0,0,1,1.83824-1.40191l.962.01187L760.269,650.08211a85.93542,85.93542,0,0,1,28.13252,5.10591l31.94794,11.5989-.01679.16854c-.26824,2.69215-2.98266,4.77232-6.18013,4.73523l-144.43382-1.69257Q666.44147,669.95951,663.18682,669.72745Z" transform="translate(-265.41249 -194.18577)" fill="#e6e6e6"/><polygon points="554.63 473.22 554.597 473.218 378.763 469.189 378.641 469.133 346.939 454.452 347.261 453.961 348.224 453.973 379.057 468.259 553.261 472.247 554.657 472.28 554.63 473.22" fill="#ccc"/><path d="M683.347,649.1861l-2.232-.03163-50.39167-.74536-2.3879-.0333c11.51365,12.25815,36.97231,15.32488,74.28841,10.57594Z" transform="translate(-265.41249 -194.18577)" fill="#ccc"/><polygon points="559.613 161.814 562.687 168.965 557.663 194.36 506.408 187.234 506.817 156.267 507.846 149.485 559.613 161.814" fill="#ffb6b6"/><polygon points="586.094 490.943 574.786 490.943 569.404 447.327 586.094 447.327 586.094 490.943" fill="#ffb6b6"/><path d="M817.87051,699.89055a4.83508,4.83508,0,0,0,4.83112,4.83111h21.51311l3.7084-7.65491,1.44022,7.65491h8.10856l-2.27947-27.34221-3.6857-.21547-12.38393-.73717-1.996-.12473v7.74559L819.95715,695.91A4.83766,4.83766,0,0,0,817.87051,699.89055Z" transform="translate(-265.41249 -194.18577)" fill="#2f2e41"/><polygon points="481.576 440.943 470.268 440.943 463.616 376.73 484.863 375.461 481.576 440.943" fill="#ffb6b6"/><path d="M713.35171,649.89055a4.83508,4.83508,0,0,0,4.83111,4.83111h21.51312l3.7084-7.65491,1.44028,7.65491h8.1085l-2.27947-27.34221-3.28874-.19284-12.59948-.7598-2.17738-.12473v7.74559L715.43834,645.91A4.83765,4.83765,0,0,0,713.35171,649.89055Z" transform="translate(-265.41249 -194.18577)" fill="#2f2e41"/><path d="M856.3064,647.51647h-.044l-2.17473-70.91863a18.54444,18.54444,0,0,0-.24332-17.52412l-.31136-.56361.8073-3.74218a23.83637,23.83637,0,0,0-1.36215-14.34564l-2.02882-66.15392c7.24815-46.97409-27.29438-77.6088-27.29438-77.6088l3.17482-24.62047-55.87036,1.26978.95037,23.35069-11.1091,38.1682c-5.84641,56.95965-45.19416,92.76163-39.21349,147.23118a1.03984,1.03984,0,0,1-.06818.46,13.90645,13.90645,0,0,0,1.12309,11.22171,4.24375,4.24375,0,0,1,.50587,1.3923c1.23214,9.549,1.39259-2.53,3.02544,6.93464l-.31771.16067c-1.144.39489-1.63465,1.97966-1.09621,3.5398s1.90242,2.50479,3.04642,2.1099l29.86695.31928c1.144-.3948,1.63484-1.97966,1.09622-3.53981-.53844-1.56014-1.90242-2.50469-3.04642-2.10989l-1.8581.93981,3.10868-10.17079,1.08969-1.01733a4.73668,4.73668,0,0,0-.60218-7.40162l0,0,3.09671-16.52756-.43976-12.49986.906-14.18084L800.21245,484.904l15.85517,78.438L832.2629,648.3058a2.96812,2.96812,0,0,0-.929,2.75281,3.07737,3.07737,0,0,0,3.06578,2.4347h21.98563a2.99464,2.99464,0,0,0,2.88387-3.79109A3.03127,3.03127,0,0,0,856.3064,647.51647Z" transform="translate(-265.41249 -194.18577)" fill="#2f2e41"/><path d="M836.755,235.32607a27.66159,27.66159,0,1,1-47.57794-19.18618l.13277-.13263c.22131-.23245.44261-.46477.675-.68614a.01083.01083,0,0,0,.011-.01108,5.80526,5.80526,0,0,0,.87414-.78555c3.73412-5.21807,7.968-9.59349,18.22344-6.86C823.85818,211.59987,836.755,220.04574,836.755,235.32607Z" transform="translate(-265.41249 -194.18577)" fill="#2f2e41"/><path d="M684.80393,223.48442a10.13242,10.13242,0,0,0,11.479,10.47018l71.33755,58.54655L778.51695,273.349,704.96814,221.822a10.18731,10.18731,0,0,0-20.16421,1.66246Z" transform="translate(-265.41249 -194.18577)" fill="#ffb6b6"/><path d="M797.74284,309.76719s-.02192-2.10855-11.36244-2.02746c-14.07666.10064-52.84558-20.10913-49.4544-39.14246a7.95989,7.95989,0,0,1-9.48943-2.27617l18.87351-18.17158c5.92256.4,5.98315,4.36307,5.47577,6.6387l15.16832,6.02728,39.50613,22.69717-6.97587,22.79876Z" transform="translate(-265.41249 -194.18577)" fill="#6c63ff"/><circle cx="536.86592" cy="47.54039" r="23.19543" fill="#ffb7b7"/><path d="M770.39864,357.09772a9.31192,9.31192,0,0,0,.45365,11.72623c.01135.6804.11338,1.33818,1.07737,3.77644a4.26777,4.26777,0,0,0,.4423.66906,1.65977,1.65977,0,0,0,.102.14743,7.71059,7.71059,0,0,0,4.02591,2.71042l42.45927,11.851,5.61362,1.56494.98662.27224.5444-7.66627a6.86443,6.86443,0,0,0,1.50825-8.81168l-.7825-1.29285,4.55895-12.2592.4423-1.21346,11.62413-31.28872.01135-2.0867.02263-2.15468.11345-15.03767a30.67606,30.67606,0,0,0-12.13447-24.47306,30.14821,30.14821,0,0,0-11.62413-5.44349l-.09075-.01135-4.59293-6.18065-18.63263,1.85988-1.5423,3.164-1.87123,3.8105-13.50665,8.04045-4.61564,10.72825-3.11867,7.258c-4.83111,3.47029-7.71167,7.92714-8.53951,13.23454-1.76914,11.27258,6.124,22.55651,7.06518,23.84928l.23818,12.93969Z" transform="translate(-265.41249 -194.18577)" fill="#6c63ff"/><path d="M826.55343,247.807c-.21023-.03323-.42047-.07753-.6307-.11075-3.61815-.6417-7.23624-1.27233-10.84333-1.92524l-.332-8.17665-4.37048,7.32465c-9.96925,3.30832-19.29673,1.43846-28.071-2.68863a79.25037,79.25037,0,0,1-8.40917-4.636c-.89124-13.82864,4.69967-22.68158,15.10326-21.75313.38.03392.65277-.354.98477-.52013a.01083.01083,0,0,0,.011-.01108c.56431-.26554,1.13969-.52,1.71508-.75232a25.55056,25.55056,0,0,1,26.82066,5.20033C825.61289,226.51866,828.79951,237.68284,826.55343,247.807Z" transform="translate(-265.41249 -194.18577)" fill="#2f2e41"/><path d="M825.92273,247.69626s-6.87116-25.64776-36.32522-31.56744c-.03316-.01094-.14384-.05525-.28769-.12156-.08847-.05538-.19915-.11076-.30977-.166.33192-.18815.65277-.354.98477-.52014a.01083.01083,0,0,0,.011-.01108c.2877-.26554.57539-.53108.87415-.78554l.84093.03322S821.2645,209.8774,825.92273,247.69626Z" transform="translate(-265.41249 -194.18577)" fill="#fd6584"/><path d="M837.25391,409.37414a3.91253,3.91253,0,0,1-4.01625.65,9.31373,9.31373,0,0,1-3.43193-2.51029,32.35943,32.35943,0,0,1-7.91817-14.27085l1.27279-2.26353A12.42821,12.42821,0,0,1,830.646,377.304a7.6634,7.6634,0,0,1,4.722-.41068,4.47559,4.47559,0,0,1,3.25418,3.22322c.49016,2.4215-1.52713,4.60782-3.56957,5.998a25.39873,25.39873,0,0,1-11.95631,4.2779,41.19218,41.19218,0,0,1,13.26943,11.90816,9.7574,9.7574,0,0,1,1.7555,3.44636A3.9227,3.9227,0,0,1,837.25391,409.37414Z" transform="translate(-265.41249 -194.18577)" fill="#2f2e41"/><path id="be339808-9edc-488a-82d9-9b8c80f783b0-256" data-name="f02c4e45-f306-4b42-b3ad-5ddd3016d7d2" d="M544.05952,705.54479h389.281a1.247,1.247,0,0,0,0-2.494H544.0595a1.247,1.247,0,1,0,0,2.494h0Z" transform="translate(-265.41249 -194.18577)" fill="#ccc"/><path d="M647.44431,384.95505v.65149c-1.40222-1.64291-2.83282-3.27182-4.24926-4.90073q-.89218-1.01976-1.78467-2.03955-3.782-4.2918-7.606-8.55517c-2.56378-2.83283-5.12756-5.66565-7.71973-8.48429-.62316-.67984-1.24627-1.35971-1.8836-2.03955a14.66188,14.66188,0,0,0-1.65741-1.58654,6.14963,6.14963,0,0,0-2.02539-1.119,5.07756,5.07756,0,0,0-2.606-.02817c-.9776.22668-1.91229.58078-2.86114.87817-.9776.32575-1.94068.63733-2.91791.94889-1.95484.63748-3.89514,1.275-5.85,1.91229a.19356.19356,0,0,1-.2522-.10651l-.00268-.00692a.19743.19743,0,0,1,.14178-.269c.48169-.15579.97724-.31155,1.47315-.46753,1.96869-.65149,3.92315-1.28881,5.89215-1.92611.97723-.32593,1.95447-.63749,2.93207-.94907a8.76215,8.76215,0,0,1,2.83282-.56659,6.40867,6.40867,0,0,1,4.16419,1.95465c.609.56659,1.16156,1.16138,1.7138,1.77051q.97723,1.06229,1.95484,2.12463,3.93025,4.29182,7.80407,8.61173,3.88825,4.33428,7.70557,8.68262.276.31878.55225.63748C644.62565,381.69724,646.02787,383.3263,647.44431,384.95505Z" transform="translate(-265.41249 -194.18577)" fill="#fff"/><path d="M622.32389,360.61042a4.78837,4.78837,0,0,0-2.06268-1.53281l-.8053.02826a85.05416,85.05416,0,0,0,24.32916,24.75754Q633.05437,372.23694,622.32389,360.61042Z" transform="translate(-265.41249 -194.18577)" fill="#fff"/><path d="M754.25382,462.8406,722.166,291.031a12.72616,12.72616,0,0,0-12.08553-10.29808q-.38925-.00864-.77844,0l-21.85889.78412-2.35253.08649-10.90929.39208-2.35253.08073-7.01724.25371L523.3138,287.4099c-.21331.01152-.43246.01152-.64577.00573l-31.70725-.66308-11.73382-.24216-.37481-.00576-8.66055-.18451-75.46547-1.56838-20.008-.42092-9.86567-.20179-2.364-.05192-11.24949-.23067-2.35826-.05187-11.509-.23643-2.35831-.05187-12.64486-.26526-1.9835-.04037-11.27832-.23638-1.78166-.03459h-.25945a12.69162,12.69162,0,0,0-12.4661,10.59791L265.57919,471.81247a12.62409,12.62409,0,0,0,12.46034,14.65716H444.70011a11.54884,11.54884,0,0,1,6.81544,2.24874l3.15975,2.341a12.73914,12.73914,0,0,0,7.51309,2.47936,192.43946,192.43946,0,0,1,98.21814,0,12.54838,12.54838,0,0,0,8.93154-3.70178,11.457,11.457,0,0,1,7.49578-3.3385l165.66885-8.72973a12.62479,12.62479,0,0,0,11.75112-14.92815Z" transform="translate(-265.41249 -194.18577)" fill="#ccc"/><path d="M708.8533,436.04857a21.97626,21.97626,0,0,1-22.75,21.16c-9.62-.34-21.1-.51-33.56-.25-40.69.87-91.81,6.47-122.56,26.61a21.96635,21.96635,0,0,1-13.05,3.58c-.34-.02-.67-.04-1.01-.07a21.928,21.928,0,0,1-12.84-5.69c-16.94-15.5-55.79-34.27-144.72-35.59-.37,0-.73-.02-1.09-.04a21.96391,21.96391,0,0,1-20.54-23.32l8.74-138.71,1.31-20.79,2.3-36.37a14.44272,14.44272,0,0,1,14.4-13.53h.09l52.98.31q33.48,1.515,55.46,8.53a95.87524,95.87524,0,0,1,14.56,5.86005,55.97512,55.97512,0,0,1,16.94,12.65,19.1189,19.1189,0,0,0,11.5,6.21,18.27586,18.27586,0,0,0,2.08.19,19.05655,19.05655,0,0,0,11.53-3.3c34.61-23.19,105.14-24.95,144.09-23.95a21.93093,21.93093,0,0,1,21.36005,20.31l1.57995,20.69,1.57,20.63,9.06,119.23,2.52,33.17A22.80586,22.80586,0,0,1,708.8533,436.04857Z" transform="translate(-265.41249 -194.18577)" fill="#f2f2f2"/><path d="M371.54377,261.84839c31.92709-10.18628,67.54611-7.4895,97.79251,6.86087a128.76776,128.76776,0,0,1,24.30152,14.96765c2.1275,1.66974,5.155-1.317,3.00463-3.00467a139.18738,139.18738,0,0,0-97.705-28.65176,133.69712,133.69712,0,0,0-28.52335,5.73047c-2.59534.828-1.48608,4.932,1.12961,4.09744Z" transform="translate(-265.41249 -194.18577)" fill="#3f3d56"/><path d="M547.22764,285.32529c29.68384-15.60223,65.22949-19.00455,97.50385-10.14807a128.52077,128.52077,0,0,1,26.512,10.5412c2.4118,1.28692,4.56079-2.37985,2.14465-3.66907-30.75982-16.41327-67.684-20.19162-101.27417-11.04221a133.6584,133.6584,0,0,0-27.031,10.649C542.66148,282.929,544.80674,286.59775,547.22764,285.32529Z" transform="translate(-265.41249 -194.18577)" fill="#3f3d56"/><path d="M547.22764,313.65351c29.68384-15.60224,65.22949-19.00455,97.50385-10.14807a128.51919,128.51919,0,0,1,26.512,10.54123c2.4118,1.28692,4.56079-2.37986,2.14465-3.6691-30.75982-16.41327-67.684-20.19162-101.27417-11.04221a133.65819,133.65819,0,0,0-27.031,10.649c-2.42151,1.27276-.27625,4.94156,2.14465,3.6691Z" transform="translate(-265.41249 -194.18577)" fill="#3f3d56"/><path d="M674.42777,340.46207a1.82116,1.82116,0,0,0-1.047-1.76126,139.3498,139.3498,0,0,0-80.222-15.02646c-.17334.01386-.33288.0416-.52008.05545h-.007a4.25348,4.25348,0,0,0-.50622.07633,134.22235,134.22235,0,0,0-47.04175,14.49945,2.14426,2.14426,0,0,0-1.04706,1.84454v52.8457a2.14417,2.14417,0,0,0,2.69049,2.03867c.6518-.1872,1.30365-.36749,1.96936-.54086a210.61943,210.61943,0,0,1,45.3498-7.09375c.32592-.01386.65179-.02771.99157-.0416a237.56873,237.56873,0,0,1,37.4101,1.34512,7.80069,7.80069,0,0,1,.77661.08319c.63794.06937,1.28973.14563,1.92773.22886.25653.02774.49927.05548.735.09707,2.48242.312,4.94409.66565,7.41266,1.04709q5.34623.8529,10.69256,1.9c.22193.0416.45075.09708.67957.13871,5.7207,1.13717,11.41376,2.45471,17.079,3.91086a2.15291,2.15291,0,0,0,2.69049-2.0525V340.54523A.17566.17566,0,0,0,674.42777,340.46207Z" transform="translate(-265.41249 -194.18577)" fill="#3f3d56"/><path d="M596.49,326.55588a6.98814,6.98814,0,0,0-5.00678-.43985,5.93365,5.93365,0,0,0-3.33483,3.13626,15.08268,15.08268,0,0,0-1.09772,4.31412c-.088.58389-.09351,1.32065.49341,1.59326a1.24289,1.24289,0,0,0,1.26123-.24972,3.72853,3.72853,0,0,0,.73846-1.03034,11.21528,11.21528,0,0,1,9.47388-5.15079l1.56872.62531A18.58135,18.58135,0,0,0,596.49,326.55588Z" transform="translate(-265.41249 -194.18577)" fill="#ff6582"/><path d="M613.46855,338.73606c-1.21741-1.79224-2.66-3.70581-4.91919-4.291-2.61628-.6777-5.3039.66858-7.58362,1.99713a221.538,221.538,0,0,0-19.66638,12.89771l.00689.06958,14.67536-.90082c3.5343-.21695,7.19006-.46381,10.31341-1.952a9.72561,9.72561,0,0,1,3.6836-1.37164,6.15637,6.15637,0,0,1,4.26684,2.05573c6.76331,6.41064,8.72052,16.214,16.30829,21.84622A206.08337,206.08337,0,0,0,613.46855,338.73606Z" transform="translate(-265.41249 -194.18577)" fill="#fff"/><path d="M595.0402,387.35727c-.3396.01416-.66565.02835-.99139.04254-2.3653-.84982-4.7873-1.60055-7.23767-2.25222-1.58655-.42484-3.20111-.80728-4.816-1.133-1.82721-.39648-3.66828-.70822-5.50971-.97742a88.11615,88.11615,0,0,0-10.58056-.89218.19234.19234,0,1,1,0-.38244c.453,0,.90637.01419,1.34552.04254a88.23556,88.23556,0,0,1,10.59472,1.034c1.82721.2974,3.65448.65149,5.46753,1.04813,1.64289.36829,3.28583.77908,4.90076,1.23227Q591.67612,386.09667,595.0402,387.35727Z" transform="translate(-265.41249 -194.18577)" fill="#fff"/><path d="M635.88963,389.11362c-.24066-.04254-.48169-.07089-.73658-.09906-.97723-.80728-1.96868-1.5722-3.00262-2.32294-1.28912-.93487-2.62048-1.813-3.98022-2.63449a70.67256,70.67256,0,0,0-9.40516-4.78747A93.7826,93.7826,0,0,0,602.873,374.2555a158.13617,158.13617,0,0,0-18.79547-2.94608c-6.3175-.65167-12.663-1.04812-19.00848-1.44476-.269-.01419-.2832-.41065,0-.39664.79327.0567,1.58655.09906,2.39368.15579,6.41638.39664,12.83276.85,19.2066,1.57236a146.42427,146.42427,0,0,1,18.76746,3.25763,91.27949,91.27949,0,0,1,15.38238,5.2832,69.94339,69.94339,0,0,1,8.27161,4.405c1.68542,1.06232,3.31451,2.1955,4.87237,3.39945C634.615,388.0513,635.26646,388.56134,635.88963,389.11362Z" transform="translate(-265.41249 -194.18577)" fill="#fff"/><path d="M633.22691,388.78788a7.6982,7.6982,0,0,0-.77912-.08509c-.29736-.24069-.60931-.46734-.92053-.694a64.77218,64.77218,0,0,0-6.813-4.26339,72.16328,72.16328,0,0,0-6.58654-3.15857,92.52516,92.52516,0,0,0-15.89209-5.014,158.11034,158.11034,0,0,0-18.79584-2.94608c-6.31714-.65167-12.66266-1.04812-19.00812-1.44476-.269-.02835-.269-.41083,0-.39664.80743.0567,1.6004.09906,2.39368.1558,6.41638.39645,12.83276.84982,19.2066,1.5722a146.39341,146.39341,0,0,1,18.76746,3.25781,90.80432,90.80432,0,0,1,15.382,5.28317c1.86975.84983,3.697,1.77051,5.48169,2.77613A57.98749,57.98749,0,0,1,633.22691,388.78788Z" transform="translate(-265.41249 -194.18577)" fill="#fff"/><path d="M654.67124,392.20148c-.2265-.04254-.45337-.09909-.67987-.1416-.25488-.2692-.49585-.55243-.73657-.83582q-1.82685-2.10333-3.61194-4.24923c-4.68805-5.58057-9.1358-11.3313-13.32831-17.1951q-5.39657-7.52124-10.2406-15.33985c-1.544-2.46453-3.03131-4.95742-4.48993-7.47869q-1.69986-2.93175-3.31451-5.878c-.31158-.56658-.609-1.1332-.90637-1.69979-.6944-1.33152-1.38843-2.677-2.12464-3.99421a11.28725,11.28725,0,0,0-3.428-4.07928,5.01576,5.01576,0,0,0-2.43622-.83563,7.36581,7.36581,0,0,0-3.5127.90634,114.45093,114.45093,0,0,0-22.28,13.66843,107.68509,107.68509,0,0,0-18.1018,17.88928c-.1698.1983-.53839.01416-.38245-.19834.63733-.79309,1.28882-1.58639,1.94031-2.36547a108.58208,108.58208,0,0,1,17.12451-16.27445c.01416-.01419.04254-.02835.0567-.04236.55225-.43918,1.10486-.864,1.67127-1.27481a115.91722,115.91722,0,0,1,10.935-7.13876q2.88914-1.67853,5.90632-3.18692c.49554-.25485,1.00561-.50989,1.51531-.75073.51008-.25486,1.02015-.49555,1.52985-.73658a8.33823,8.33823,0,0,1,3.24365-.89218c3.93769-.0567,5.963,3.9093,7.3653,6.58618.43915.83582.89252,1.67145,1.33166,2.50708,1.69965,3.15857,3.47016,6.30313,5.31153,9.405,1.11865,1.9263,2.28021,3.83859,3.456,5.73654,1.68543,2.70539,3.41339,5.38227,5.21228,8.04529a.0139.0139,0,0,0,.01361.01419h.00055c2.08209,3.14438,4.24927,6.23206,6.48731,9.30576q5.75766,7.88227,12.06787,15.41055Q652.43363,389.68023,654.67124,392.20148Z" transform="translate(-265.41249 -194.18577)" fill="#fff"/><path d="M604.138,329.64591l-.39178.17132a10.691,10.691,0,0,0-8.6363-5.22851c-5.79889-.41193-10.89282,3.45257-11.35589,8.614a8.53066,8.53066,0,0,0,1.72436,5.9379l-.36371.215a8.88365,8.88365,0,0,1-1.79583-6.18381c.48187-5.37491,5.787-9.39942,11.82586-8.97046A11.133,11.133,0,0,1,604.138,329.64591Z" transform="translate(-265.41249 -194.18577)" fill="#ff6582"/><path d="M575.48411,340.08866a10.45861,10.45861,0,0,0-9.525.60632,150.1542,150.1542,0,0,1,15.45623,3.211C579.30692,342.80616,577.65763,341.083,575.48411,340.08866Z" transform="translate(-265.41249 -194.18577)" fill="#fff"/><path d="M565.92985,340.69028l-.57312.41464c.19385-.14514.39538-.28119.60242-.41Z" transform="translate(-265.41249 -194.18577)" fill="#fff"/><path d="M583.189,343.09507c-.22845-.22669-.45544-.45334-.68536-.68a19.891,19.891,0,0,0-6.2486-4.57235,10.00033,10.00033,0,0,0-3.798-.78366,11.985,11.985,0,0,0-3.94348.76553c-.59375.21112-1.17438.45074-1.74622.70593-.65338.29273-1.29516.60489-1.934.91965q-1.79863.886-3.55066,1.84967-3.486,1.9177-6.75354,4.12808-1.6939,1.14633-3.31787,2.36777-1.51042,1.13466-2.95984,2.3302c-.2066.16968-.51513-.10492-.30853-.2746.25464-.21115.51221-.421.76978-.6282q1.0914-.87818,2.21771-1.72272,2.05389-1.5427,4.21423-2.96619,3.35926-2.21493,6.95-4.12936,1.79435-.95595,3.638-1.83154c.3711-.17615.74659-.34845,1.12635-.51163a19.2827,19.2827,0,0,1,2.67755-.97019,10.64414,10.64414,0,0,1,4.044-.3536,11.41873,11.41873,0,0,1,3.73114,1.14892,24.482,24.482,0,0,1,6.186,4.93244C583.68382,343.00568,583.37669,343.28159,583.189,343.09507Z" transform="translate(-265.41249 -194.18577)" fill="#fff"/><path d="M371.54377,290.17664c31.92709-10.18628,67.54611-7.4895,97.79251,6.86084a128.76673,128.76673,0,0,1,24.30152,14.96765c2.1275,1.66974,5.155-1.317,3.00463-3.00467a139.18733,139.18733,0,0,0-97.705-28.65176,133.69712,133.69712,0,0,0-28.52335,5.73047c-2.59534.828-1.48608,4.932,1.12961,4.09744Z" transform="translate(-265.41249 -194.18577)" fill="#3f3d56"/><path d="M371.54377,318.50486c31.92709-10.18628,67.54611-7.48951,97.79251,6.86084a128.76673,128.76673,0,0,1,24.30152,14.96765c2.1275,1.66974,5.155-1.317,3.00463-3.00467a139.18738,139.18738,0,0,0-97.705-28.65177,133.69835,133.69835,0,0,0-28.52335,5.73047c-2.59534.828-1.48608,4.932,1.12961,4.09745Z" transform="translate(-265.41249 -194.18577)" fill="#3f3d56"/><path d="M371.54377,346.83307c31.92709-10.18628,67.54611-7.4895,97.79251,6.86084a128.76776,128.76776,0,0,1,24.30152,14.96765c2.1275,1.66974,5.155-1.317,3.00463-3.00467a139.18738,139.18738,0,0,0-97.705-28.65176,133.69712,133.69712,0,0,0-28.52335,5.73047c-2.59534.828-1.48608,4.932,1.12961,4.09744Z" transform="translate(-265.41249 -194.18577)" fill="#3f3d56"/><path d="M371.54377,375.16132c31.92709-10.18628,67.54611-7.4895,97.79251,6.86084a128.76673,128.76673,0,0,1,24.30152,14.96765c2.1275,1.66974,5.155-1.317,3.00463-3.00467a139.18733,139.18733,0,0,0-97.705-28.65176,133.69712,133.69712,0,0,0-28.52335,5.73047c-2.59534.828-1.48608,4.932,1.12961,4.09744Z" transform="translate(-265.41249 -194.18577)" fill="#3f3d56"/><path d="M371.54377,403.48954c31.92709-10.18628,67.54611-7.48951,97.79251,6.86084a128.76532,128.76532,0,0,1,24.30152,14.96768c2.1275,1.66974,5.155-1.317,3.00463-3.00467a139.18738,139.18738,0,0,0-97.705-28.65177,133.69835,133.69835,0,0,0-28.52335,5.73047c-2.59534.828-1.48608,4.932,1.12961,4.09745Z" transform="translate(-265.41249 -194.18577)" fill="#3f3d56"/><path d="M486.57334,227.73857v67.93c0,1.35-2.36005,2.48-5.54,2.79a.21977.21977,0,0,0-.08.01c-.53.04-1.09.07-1.66.07a14.57029,14.57029,0,0,1-5.15-.84c-.15-.06-.3-.13-.45-.19-.14-.08-.29-.15-.43-.23-.79-.47-1.25-1.02-1.25-1.61v-73.79A95.87524,95.87524,0,0,1,486.57334,227.73857Z" transform="translate(-265.41249 -194.18577)" fill="#6c63ff"/><rect x="249.59866" y="49.30815" width="2.08026" height="242.23463" fill="#e6e6e6"/><path d="M743.31311,409.32034a10.13242,10.13242,0,0,0,8.84853-12.77092L795.33945,376.394l25.99443-42.0491-20.43246-8.24933-17.5361,33.88436L738.98061,389.557a10.18731,10.18731,0,0,0,4.3325,19.76331Z" transform="translate(-265.41249 -194.18577)" fill="#ffb6b6"/><path d="M837.3686,294.06308s5.08849,1.661-.49651,11.53124c-4.47122,7.90188-26.25242,53.4177-35.14229,62.35456a7.95988,7.95988,0,0,1-.99241,9.708L780.21462,361.371c-.39215-5.92309,3.52758-6.51081,5.8505-6.31094l4.72136-16.73345L807.254,297.04775l26.45777-4.25063Z" transform="translate(-265.41249 -194.18577)" fill="#6c63ff"/><path d="M837.81192,216.694c.97028-3.92322,8.00959-6.82-4.0487-12.2973-2.92646-1.32929-2.80518-5.90708-5.28064-7.95718s-6.10071-3.00056-8.97772-1.56762c-2.56928,1.27961-4.01707,4.17541-4.32579,7.02911a25.89228,25.89228,0,0,0,.98129,8.51209l-.2338.34154q7.16485,5.48264,14.32982,10.96512c1.75519,1.34314,4.0498,2.74952,6.01679,1.74173C838.50006,222.3206,837.21121,219.12294,837.81192,216.694Z" transform="translate(-265.41249 -194.18577)" fill="#2f2e41"/></svg>';
    }

?>