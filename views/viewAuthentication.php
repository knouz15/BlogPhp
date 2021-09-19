
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('public/assets/img/connexion.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Se connecter</h1>
                            <span class="subheading">Laisser place à votre créativité</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Sans plus tarder, connectez-vous pour accèder à mon blog.<br> vous pourriez alors apprécier, poster et commenter différents articles traitant de sujets suceptibles de vous plaire !<br></br></br></p>
                        
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form action="post&user" method="post" id="contactForm">
                             
                                <div class="form-floating">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Entrer votre email..." data-sb-validations="required,email" required/>
                                    <label for="email">Votre adresse email</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">l'email est requis.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email non valide.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="pw" name="pw" type="password" placeholder="Entrer votre mot de passe..." data-sb-validations="required" required/>
                                    <label for="phone">Mot de passe</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Le mot de passe est requis.</div>
                                </div>

                                <br />

                               
                                <!-- Submit Button-->
                                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Se connecter</button>
                            </form>


                            
                            <div class="subscrib">

                            </br>

                             <P> Pas encore inscrit ? créer votre compte dès maintenant! <br><span>&#8594;</span><a href="post&inscription"><b>  Je m'inscris <b></a></p>  
                             
                             


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
      
