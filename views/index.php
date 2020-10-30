<?php include_once("header.html"); ?>
        <div id="container">
            <div id="margin">
                <div class="page">
                    <form method="GET" action="../models/subscribe.php" >
                        
                        <label for="name">Nome completo</label>
                        <input type="text" name="name" placeholder="Digite o seu nome" id="name" required />
                        
                        <label for="email">Email</label>
                        <input type="text" name="email" placeholder="Digite o seu email" id="email" required />
                        
                        <label for="address" >Endereço</label>
                        <input type="text" name="address" placeholder="Digite o seu endereço completo" id="address" required />
                        
                        <label for="telephone" >Telefone</label>
                        <input type="text" name="telephone" placeholder="Digite o seu número do whatsapp" id="telephone" required />
                        
                        <label for="church" >Frequenta alguma igreja?</label>
                        
                        <input type="text" name="church" placeholder="Se sim, digite o nome da sua igreja" id="church" />
                        
                        <p style="color:#00CC8F;font-size:15px;text-transform:uppercase;"><?php
                        
                            if(isset($_SESSION["msg"])){
                                echo $_SESSION["msg"];
                                unset($_SESSION["msg"]);
                            }
                        
                        ?></p><br/>
                        
                        <button name="submit" >Participar</button>
                        
                    </form>
                    
                    <center><button><a href="../src/file/QUIZ.pdf" target="blank">Questionário</a></button></center>
                    
                    <div class="socialNetworks">
                    <ul>
                        <li><a href="https://chat.whatsapp.com/Bdnc1NRBjydAHiqr426Pcg" target="blank"><i class="fab fa-whatsapp"></i> Grupo Whatsapp</a></li>
                        <li><a href="https://t.me/joinchat/KTN2fRunzAyDfNEnlCHy4g" target="blank"><i class="fab fa-telegram-plane"></i> Grupo Telegram</a></li>
                    </ul>
                </div>
                <footer id="footer">
                    <div class="text">
                        <a href="https://api.whatsapp.com/send?phone=5521969172432&text=Gostaria%20de%20fazer%20um%20site%20" target="blank"><i class="fas fa-mug-hot"></i> Raphael Lima</a>
                    </div>
                </footer>
                </div>
            </div>
        </div>
<?php include_once("footer.html"); ?>