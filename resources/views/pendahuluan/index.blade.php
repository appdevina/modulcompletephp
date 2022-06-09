@extends('layout.main_template')

@section('content')
    <section class="content-header">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <div class="row d-inline-flex">
                                    <h3 class="card-title">Pendahuluan</h3>
                                </div>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">

                                    </div>
                                </div>
                            </div>

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 500px;">
                                <div class="container col-md-12">
                                    <h1>Apakah itu retail ?</h1>
                                </div>
                                <div class="container col-md-12">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique voluptatum ad
                                        quibusdam earum fugit obcaecati, et nulla repellat impedit magnam, dignissimos velit
                                        dolorum? Inventore aliquid, soluta obcaecati odio quam consequuntur expedita
                                        veritatis odit enim, nesciunt atque dignissimos eum natus corporis? Rerum, eum?
                                        Necessitatibus modi iusto ipsam inventore impedit, quaerat facere saepe odio,
                                        voluptatem eius architecto laboriosam tenetur. Dolorem doloribus voluptatibus totam
                                        reiciendis tenetur veniam ipsam, error quod accusantium quidem. Recusandae soluta
                                        facere dicta rem sapiente, impedit deleniti quam architecto possimus totam, qui
                                        porro ratione non provident cupiditate animi molestiae quis, adipisci aliquam magni
                                        in. Possimus molestias minus quaerat pariatur rerum nostrum aliquid amet quisquam
                                        voluptatibus temporibus dolor quas quasi animi, vitae cum sunt officiis dolore ipsa,
                                        maiores ex iusto maxime. Libero voluptates vel cumque? Quam laboriosam nam
                                        voluptatibus sit. Id veritatis, accusantium culpa harum quod voluptas eum voluptate!
                                        Facere voluptatibus cupiditate officia id quo distinctio accusamus dolorem
                                        perspiciatis eaque porro, maiores optio dolor. Quas quaerat illum sunt totam quam
                                        perferendis at ex nemo iusto fugit quibusdam tempora neque numquam laborum dolorem
                                        eius, unde, quidem minima nisi corrupti expedita magnam rerum! Architecto, eos
                                        similique enim assumenda ipsa odit possimus, fugit magni ipsum minima reiciendis
                                        earum ullam error natus! Magnam corporis, non possimus odio provident porro aliquid
                                        quasi quia voluptatibus nostrum reprehenderit, cumque et voluptas sapiente! Quasi
                                        adipisci explicabo quas dolor! Eaque modi dolor dicta ratione beatae tempore dolorum
                                        vero ex iure quaerat fugiat voluptate atque, iste repudiandae corporis accusantium
                                        praesentium! Labore placeat ullam accusantium officiis facilis minima quis. Enim
                                        itaque suscipit atque rerum vero accusantium quis repellat autem magnam quisquam
                                        voluptates at voluptatibus, debitis voluptate nostrum quos dolores aliquid!
                                        Quibusdam cupiditate velit est placeat consequuntur quam autem ullam libero nesciunt
                                        sunt soluta, sapiente iste quia minima optio tempore earum laborum pariatur deleniti
                                        unde neque repellat assumenda? Consequuntur rem veniam quod iste, beatae quisquam
                                        unde! Quidem voluptates facilis tenetur sit, quisquam harum labore suscipit optio
                                        ipsa omnis animi, obcaecati quia id eum molestiae esse molestias? Numquam suscipit
                                        tenetur similique a eligendi pariatur sed deleniti quae fuga impedit! Fugiat
                                        repellendus, debitis, atque consequatur dicta natus ad, rem harum hic at minima
                                        sequi reiciendis laudantium deleniti sunt esse ipsa explicabo! Quas quam voluptas
                                        ipsa possimus voluptate maiores est fugiat iste repellat, laborum quae molestias
                                        dolorem minus. Iste dolore culpa ipsam odio iusto. Soluta, sunt quam? Recusandae
                                        nihil quas cumque! Nesciunt voluptatum mollitia, soluta repellendus corrupti odio
                                        eligendi dolore porro repellat accusantium sequi! Magni deserunt, laborum
                                        dignissimos voluptates pariatur quidem repellat nesciunt est iste eos qui similique
                                        unde impedit animi dolores nam, alias dolorem harum adipisci id hic officiis! Ut
                                        dolores sit ea. Aliquam adipisci, voluptatum magni harum fugiat tenetur saepe
                                        voluptas ipsa doloremque officia ducimus deleniti perspiciatis esse iure mollitia
                                        sapiente asperiores illum unde? Laborum tempore nemo quidem molestias unde neque
                                        sequi cumque tenetur ipsam aut saepe optio maxime, adipisci officiis aliquid eos
                                        amet distinctio architecto quis est modi expedita. Iste autem soluta nulla quas,
                                        similique vero fuga nesciunt dolorum quis consequuntur quidem pariatur iure culpa,
                                        libero, asperiores facilis dolores blanditiis! Quibusdam recusandae assumenda
                                        veritatis voluptates vel. Error dicta ullam vel esse, sequi sint doloremque dolorem
                                        nam! Cum quisquam neque iure numquam odit consequuntur et, ullam dicta libero
                                        necessitatibus sunt asperiores natus deserunt hic accusantium? Debitis ipsa est
                                        magni, accusantium quas dolore illo libero ipsam dolores placeat, exercitationem
                                        accusamus possimus fuga ad corporis quibusdam perferendis? Doloremque beatae est
                                        veritatis, laborum libero et expedita vitae mollitia tenetur provident ab iure
                                        exercitationem sapiente dolor distinctio magnam nisi aspernatur numquam consectetur!
                                        Dolorem a laborum dolor dignissimos corporis reprehenderit temporibus soluta quas
                                        ipsam, velit laudantium excepturi iste blanditiis voluptate autem deserunt ipsum rem
                                        corrupti quod accusamus illum tempore eos pariatur fugit? Nam aut ad corporis quod
                                        dignissimos, voluptatem non itaque nesciunt, nihil officia quasi eum necessitatibus
                                        nulla, facilis modi porro voluptas omnis quidem a? Dolorum, natus? Nobis architecto
                                        cumque ea eius magnam vitae quibusdam? Sint tempore explicabo id hic nihil aliquam
                                        asperiores veniam ratione tenetur, eligendi, saepe et quas tempora ducimus? Magnam
                                        odit accusantium obcaecati explicabo, ipsum harum officia quo dolores inventore
                                        unde. Ut, iusto tenetur cum quaerat vero quos maiores id neque excepturi
                                        consequuntur. Voluptatum a repellat, et sunt esse non. Eius eveniet provident vitae
                                        iste obcaecati quos reiciendis saepe nulla, ipsum in officiis dolores autem iusto
                                        laborum illo ab deleniti sed architecto itaque tenetur est reprehenderit numquam.
                                        Nesciunt voluptatum sequi suscipit beatae, iure doloribus, distinctio, laudantium
                                        voluptatibus hic blanditiis impedit quam tempora debitis sit. Rerum consectetur
                                        fugiat molestiae possimus laudantium, asperiores ea commodi porro est perspiciatis
                                        ut illo reprehenderit veritatis consequatur minus id minima omnis voluptate dolore
                                        eligendi, cupiditate, pariatur modi quas ipsum! Soluta iure a, quaerat quasi itaque,
                                        vitae porro pariatur debitis in laudantium vel consequatur voluptatem numquam earum.
                                        Eveniet temporibus aliquam tempora excepturi expedita quo odit quae perferendis at
                                        est quasi ratione, ea nam, animi quaerat similique libero. Quo soluta corrupti
                                        ducimus consectetur reprehenderit ullam ab eius, distinctio assumenda quod dolores
                                        consequuntur, voluptas error sit, atque voluptates ut? Voluptatum dolor praesentium
                                        molestias, facilis ex iure saepe iusto libero eum fugiat cupiditate quibusdam sint
                                        labore deserunt dolorum provident ab. Accusantium nemo velit dolor quos voluptatibus
                                        deleniti odit inventore ipsa ut libero beatae quae, tenetur voluptatem. Ducimus unde
                                        quo reiciendis soluta vel, a laudantium aliquid placeat provident temporibus,
                                        accusamus dolore, autem omnis totam odio accusantium. Blanditiis veritatis fuga amet
                                        id mollitia possimus natus vel eveniet quas repudiandae, eos eligendi suscipit
                                        doloribus consequatur soluta delectus ex expedita neque eius sit iure, sunt, minus
                                        ullam? Voluptas provident quisquam esse ex adipisci quidem cupiditate, modi
                                        molestias ratione debitis rerum ipsa delectus, tempore minus veniam doloremque
                                        aperiam placeat minima? Nulla, nesciunt. Veritatis, quis fugit. Voluptates
                                        voluptatem eligendi ipsa natus minus perspiciatis, culpa rerum, velit dolorum quae
                                        animi consequuntur repudiandae ad accusamus ab et est officia aperiam. Hic
                                        architecto assumenda ea, voluptatem ipsa beatae a excepturi est in error doloribus
                                        repellendus voluptates rem saepe veritatis numquam praesentium ratione ab autem eum
                                        repellat minus non cumque. In quis consequuntur dolorem, quam quaerat harum, beatae
                                        laborum itaque tempore labore aliquid incidunt et mollitia deserunt. Delectus
                                        tenetur a, eaque distinctio at numquam illum voluptate.</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
