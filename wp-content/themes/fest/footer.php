<?php //wp_footer(); ?>
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <?php $menu=wp_get_nav_menu_items('Main_menu'); /*print_r($menu);*/ foreach ($menu as $key=>$val) { if ($val->title!='Материалы'){ ?>
                <div class="col-md-2">
                    <ul>
                        <li class=""><a href="<?=$val->url?>"><?=$val->title ?></a>
                    </li>
                    </ul>
                </div>
                <?php }} ?>
            <!--<div class="social">
                <a target="_blank"  href="https://vk.com/fest_dss"><img src="<?php /*bloginfo('template_directory');*/?>/public/img/1456923485_vkontakte.svg" alt=""> Группа ВКонтакте</a>
            </div>-->
            <!--<div class="authors">
                <p>Авторы: John smith, etc</p>
                <p>Этот сайт работает на wordpress </p>
            </div>-->
        </div>
    </div>
</footer>
<!-- auth modal -->
<div id="auth-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-sm normal-font">


        <div id="auth-carousel" class="carousel slide" data-ride="carousel" data-interval="0">

            <div class="carousel-inner">

                <div class="item active">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Вход</h4>
                        </div>

                        <div class="modal-body">
                            <form action="<?php bloginfo('url'); ?>/wp-login.php?redirect_to=/" method="post" class="login-form">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" name="log" class="form-control" placeholder="Логин">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" name="pwd" class="form-control" placeholder="Пароль">
                                </div>
                                <p>Или войдите через:</p>
                                <div  id="vkapi_login_button" onclick="VK.Auth.login(onSignon)"  class=" vkapi_vk_login btn btn-primary vk"><img src="<?php bloginfo('template_directory');?>/public/img/vk.svg" alt=""></div>
                                <button  class="btn btn-default g"><img src="<?php bloginfo('template_directory');?>/public/img/g+.svg" alt=""></button>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" onclick="">Вход</button>
                            <button type="button" class="btn btn-default" data-target="#auth-carousel" data-slide-to="1">Зарегистрироваться</button>
                        </div>

                    </div>
                </div>

                <!-- registration slide step 1 -->

                <div class="item">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Регистрация - шаг 1</h4>
                        </div>

                        <div class="modal-body">
                            <form action="<?php bloginfo('url'); ?>/wp-login.php?action=register" method="post" class="login-form">
                                <p>Придумайте логин и укажите свой e-mail. На указанный e-mail прийдет письмо подтверждения регистрации.</p>
                                <div class="form-group">
                                    <label for="pw">Логин</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" name="user_login" class="form-control" placeholder="Логин">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pw">E-mail</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input type="email" name="user_email" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                                <input type="submit" name="submit" class="form-control" placeholder="Принять">
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-target="#auth-carousel" data-slide-to="0">Отмена</button>
                            <button type="button" class="btn btn-primary" data-target="#auth-carousel" data-slide-to="2">Далее</button>
                        </div>

                    </div>
                </div>

                <!-- registration slide step 2 -->

                <div class="item">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Регистрация - шаг 2</h4>
                        </div>

                        <div class="modal-body">
                            <form action="" class="login-form">
                                <p>Придумайте пароль.
                                    Пароль должен содержать цифры, Заглавные и строчные буквы латинского алфавита.
                                </p>
                                <div class="form-group">
                                    <label for="pw">Пароль</label>
                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="pw" type="password" class="form-control" placeholder="Пароль">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pw">Подтверждение пароля</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="Еще раз пароль">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-target="#auth-carousel" data-slide-to="1">Назад</button>
                            <button type="button" class="btn btn-primary" data-target="#auth-carousel" data-slide-to="3">Далее</button>
                        </div>

                    </div>
                </div>

                <!-- registration slide step 3 -->

                <div class="item">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Регистрация - шаг 3</h4>
                        </div>

                        <div class="modal-body">
                            <form action="" class="login-form">
                                <p>Пожалуйста заполните информацию о себе.</p>

                                <div class="form-group">
                                    <label for="birth-date">Дата рождения</label>
                                    <div class="input-group" >
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        <input id="birth-date" class="form-control" placeholder="Дата рождения" type="text" value="01-04-1991"  data-date="01-04-1991" data-date-format="dd-mm-yyyy">
                                    </div>
                                    <script>
                                        $('#birth-date').datepicker().on('changeDate', function(ev) {
                                            $(this).datepicker('hide');
                                        });
                                    </script>
                                </div>

                                <div class="form-group">
                                    <label for="last-name">Фамилия</label>
                                    <div class="input-group">
                                        <span  class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="last-name" type="text" class="form-control" placeholder="Фамилия">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Имя</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="name" type="password" class="form-control" placeholder="Имя">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name">Отчество</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="middle-name" type="password" class="form-control" placeholder="Отчество">
                                    </div>
                                </div>
                                <div class="form-group">
                                    Команда
                                    <select id="command" class="form-control">
                                        <option value="0">Отсутсвует в списке</option>
                                        <option value="1">Вифлеемская звезда</option>
                                        <option value="2">Витязи веры</option>
                                        <option value="3">Ихтис</option>
                                        <option value="4">АПМД</option>
                                        <option value="1">Христославы</option>
                                        <option value="2">Северная звезда</option>
                                        <option value="3">Елеон</option>
                                        <option value="4">Вертоград</option>
                                    </select>
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-target="#auth-carousel" data-slide-to="2">Назад</button>
                            <button type="button" class="btn btn-primary" data-target="#auth-carousel" data-slide-to="4">Готово</button>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</div>


<div id="vkapi_body">			<div id="vk_api_transport" style="position: absolute; top: -10000px;"><script type="text/javascript" src="https://vk.com/js/api/openapi.js" async=""></script></div>
    <script type="text/javascript">
        jQuery(function () {
            window.vkAsyncInit = function () {
                VK.init({
                    apiId: 4296087
                });
                if (typeof onChangePlusVK !== 'undefined')
                    VK.Observer.subscribe('widgets.comments.new_comment', onChangePlusVK);
                if (typeof onChangeMinusVK !== 'undefined')
                    VK.Observer.subscribe('widgets.comments.delete_comment', onChangeMinusVK);
                if (!window.vkapi_vk) {
                    window.vkapi_vk = true;
                    jQuery(document).trigger('vkapi_vk');
                }
            };

            var el = document.createElement("script");
            el.type = "text/javascript";
            el.src = "https://vk.com/js/api/openapi.js";
            el.async = true;
            document.getElementById("vk_api_transport").appendChild(el);
        });
    </script>
</div>

<!-- end auth modal -->
</body>
</html>