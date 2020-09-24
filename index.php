
         <?php include("_header.php"); ?>

        <div class="column is-8 is-offset-2">
            <div class="articles">

                <article class="card article" id="learn">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content has-text-centered">
                                <h2 class="title article-title">Learn with pleasure</h2>
                                <div class="tags has-addons level-item">
                                    <span class="tag is-rounded is-info">@tic</span>
                                    <span class="tag is-rounded">Jul 22, 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="content article-body">
                            <p>Non arcu risus quis varius quam quisque. Dictum varius duis at consectetur lorem. Posuere
                                sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. </p>
                            <p>Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. In hac habitasse
                                platea dictumst vestibulum rhoncus est pellentesque elit. Accumsan lacus vel facilisis
                                volutpat. Non sodales neque sodales ut etiam.
                                Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus.</p>
                            <figure class="image has-image-centered">
                                <img src="https://picsum.photos/400/200" alt="">
                            </figure>
                        </div>
                    </div>
                </article>

                <article class="card article" id="skills">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content has-text-centered">
                                <h2 class="title article-title">Increase your skills</h2>
                                <div class="tags has-addons level-item">
                                    <span class="tag is-rounded is-info">@tac</span>
                                    <span class="tag is-rounded"><?php echo date("M j, Y"); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="content article-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat est velit egestas.
                                Sapien eget mi proin sed. Sit amet mattis vulputate enim.
                            </p>
                            <p>
                                Commodo ullamcorper a lacus vestibulum sed arcu. Fermentum leo vel orci porta non. Proin
                                fermentum leo vel orci porta non pulvinar. Imperdiet proin fermentum leo vel. Tortor posuere
                                ac ut consequat semper viverra. Vestibulum lectus mauris ultrices eros.
                            </p>
                            <figure class="image has-image-centered">
                                <img src="https://picsum.photos/400/180" alt="">
                            </figure>
                            <h3 class="has-text-centered">Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi.
                                Cras tincidunt lobortis feugiat vivamus.</h3>
                            <p>
                                In eu mi bibendum neque egestas congue quisque egestas diam. Enim nec dui nunc mattis enim
                                ut tellus. Ut morbi tincidunt augue interdum velit euismod in. At in tellus integer feugiat
                                scelerisque varius morbi enim nunc. Vitae suscipit tellus mauris a diam.
                                Arcu non sodales neque sodales ut etiam sit amet.
                            </p>
                        </div>
                    </div>
                </article>
            </div>

            <aside class="hero is-info is-bold is-small promo-block" id="picture">
                <div class="hero-body picture">
                    <div class="container">
                        <h2 class="title">
                            <i class="fa fa-bell-o"></i> Nemo enim ipsam voluptatem quia.
                        </h2>
                        <span class="tag is-black is-medium is-rounded">
                            Natus error sit voluptatem
                        </span>
                    </div>
                </div>
            </aside>

            <section class="card contact" id="contact">
                <div class="card-content">
                    <div class="media">
                        <div class="media-content has-text-centered">
                            <h2 class="title article-title">Contact-Us</h2>
                        </div>
                    </div>
                    <div class="content article-body">
                        <form action="form.php" method="post">
                            <div class="field">
                                <label for="firstname" class="label">First Name</label>
                                <div class="control">
                                    <input id="firstname" name="firstname" class="input" type="text">
                                </div>
                            </div>
                            <div class="field">
                                <label for="lastname" class="label">Last Name</label>
                                <div class="control">
                                    <input id="lastname" name="lastname" class="input" type="text">
                                </div>
                            </div>
                            <div class="field">
                                <label for="campus" class="label">Campus</label>
                                <div class="control">
                                    <input id="campus" name="campus" class="input" type="text">
                                </div>
                            </div>
                            <div class="field">
                                <label for="message" class="label">Message</label>
                                <div class="control">
                                    <textarea id="message" name="message" class="textarea"></textarea>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control has-text-centered">
                                    <button class="button is-link has-background-alt">Submit</button>
                                </div>
                            </div>
                        </form>
                        <form id="login" action="login.php" method="post">
                            <div class="field">
                                <label for="login" class="label">Login</label>
                                <div class="control">
                                    <input id="login" name="login" class="input" type="text">
                                </div>
                            </div>
                            <div class="field">
                                <label for="password" class="label">Password</label>
                                <div class="control">
                                    <input type="password" id="password" name="password" class="input">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control has-text-centered">
                                    <button class="button is-link has-background-alt">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </section>
        </div>
   

    <?php include('_footer.php'); ?>
