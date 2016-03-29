<?php //wp_footer(); ?>

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
<div id="reg-group" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-md normal-font">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
            <form action="" method="post" name="group_add" >
            <div class="carousel-inner">
                <div class="item active">
                    <div style="min-height: 440px;" class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Регистрация компании</h4>
                        </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="i_group glyphicon glyphicon-user"></i><i class="i_group i_group-center glyphicon glyphicon-user"></i><i class="i_group glyphicon glyphicon-user"></i></span>
                                            <input type="text" name="log" class="form-control" placeholder="Название команды" title="Название команды">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input type="text" name="log" class="form-control" placeholder="ФИО Руководителя" title="ФИО Руководителя">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="i_group glyphicon glyphicon-user"></i><i class="i_group-spirit glyphicon glyphicon-record"></i></span>
                                            <input type="text" name="log" class="form-control" placeholder="ФИО Духовника" title="ФИО Духовника">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i><i class="i_group-book glyphicon glyphicon-grain"></i></span>
                                            <input type="text" name="log" class="form-control" placeholder="Сан Духовника" title="Сан Духовника">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i><i class="i_group-mark glyphicon glyphicon-map-marker"></i></span>
                                            <input type="text" name="log" class="form-control" placeholder="Область" title="Область">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i><i class="i_group-mark glyphicon glyphicon-map-marker"></i></span>
                                            <input type="text" name="log" class="form-control" placeholder="Город" title="Город">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                            <input type="text" name="log" class="form-control" placeholder="Адрес"  title="Адрес">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></i><i class="i_group-spirit_2 glyphicon glyphicon-record"></i></span>
                                            <input type="text" name="log" class="form-control" placeholder="Название прихода" title="Название прихода">
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>

                        <div class="modal-footer">
                                <a class="btn btn-primary right" href="#myCarousel" data-slide="next">Далее</a>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div style="min-height: 440px;" class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Регистрация компании</h4>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="i_group glyphicon glyphicon-user"></i><i class="i_group i_group glyphicon glyphicon-user"></i><i class="i_group glyphicon glyphicon-user"></i></span>
                                        <input type="text" name="log" class="form-control" placeholder="Колличество человек в комманде" title="Колличество человек в комманде">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <span class="input-group-addon">Возраст участников</span>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="small glyphicon glyphicon-user"></i></span>
                                                <input type="text" name="log" class="form-control" placeholder="От" title="Минимальный возраст участника">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="big glyphicon glyphicon-user"></i></span>
                                                <input type="text" name="log" class="form-control" placeholder="До" title="Максимальный возраст участника">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="i_group glyphicon glyphicon-user"></i><i class="i_group i_group glyphicon glyphicon-user"></i><i class="i_group glyphicon glyphicon-user"></i></span>
                                        <input type="text" name="log" class="form-control" placeholder="Общее колличество человек в комманде" title="Общее колличество человек в комманде">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="input-group-addon">Тематика группы</span>
                                    <div class="input-group">
                                        <!--<span class="input-group-addon"></span>-->
                                        <select title="Тип тематики" class="form-control" name="type-them" id="type-them">
                                            <option value="1">Одобренная тема</option>
                                            <option value="2">Произвольная тема</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Тематика группы</span>
                                        <select title="Тематики" class="form-control" name="them" id="them">
                                            <option value="1" >ssss</option>
                                            <option value="2" >wefwefwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Тематика группы</span>
                                        <input type="text" name="log" class="form-control" placeholder="Общее колличество человек в комманде" title="Общее колличество человек в комманде">
                                        <input type="text" name="them_id" class="hide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="modal-footer">
                                <a class="btn btn-danger left" href="#myCarousel" data-slide="prev">Назад</a>
                                <input type="submit" name="add_group" value="Создать" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </div>
            </form>
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
<!-- end auth modal -->
</body>
</html>