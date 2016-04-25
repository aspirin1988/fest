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
                                        /*$('#birth-date').datepicker().on('changeDate', function(ev) {
                                            $(this).datepicker('hide');
                                        });*/
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

<!-- command registration -->

<div id="reg-group" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-md normal-font">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-wrap="false" data-interval="0">
            <form action="<?php bloginfo('url'); ?>/index.php/grouprg" method="post" id="group_add" name="group_add" >
            <div class="carousel-inner">

                <!--slide 1-->
                <div class="item active">
                    <div class="modal-content c-modal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">1. Регистрация команды (Информация о команде)</h4>
                        </div>
                            <div class="modal-body">
                                    <!-- first row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-container">
                                                <label for="g-name">Название команды</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                                    <input id="g-name" type="text" name="name_gr" class="form-control" placeholder="Название команды" title="Название команды">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-container">
                                                <label for="g-command-type">Тип команды</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-bars"></i></span>
                                                    <select name="command_type" id="g-command-type" class="form-control">
                                                        <option selected value="0">Воскресная школа</option>
                                                        <option value="1">Молодежный клуб</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--second row-->
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="input-container">
                                                <label for="g-eparhy">Епархия</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                    <input id="g-eparhy" type="text" name="eparhy" class="form-control" placeholder="Название епархии" title="Название епархии">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-container">
                                                <label for="g-location">Область</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                                    <input id="g-location" type="text" name="region" class="form-control" placeholder="Область" title="Область">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!--third row-->
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="input-container">
                                                <label for="g-city">Город</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
                                                    <input id="g-city" type="text" name="city" class="form-control" placeholder="Город" title="Город">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-container">
                                                <label for="g-adress">Адрес прихода</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                    <input id="g-adress" type="text" name="address_parish" class="form-control" placeholder="Адрес"  title="Адрес прихода (район, улица, дом)">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!--fourth row-->
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="input-container">
                                                <label for="g-parish">Название прихода</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i><i class="i_group-spirit_2 glyphicon glyphicon-record"></i></span>
                                                    <input id="g-parish" type="text" name="name_parish" class="form-control" placeholder="Название прихода" title="Название прихода">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-container">
                                                <label data-toggle="modal" data-target=".map-modal" for="g-geoposition">Местоположение на карте</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                                    <input data-toggle="modal" data-target=".map-modal" id="g-geoposition" type="text" name="geoposition" class="form-control" placeholder="Адрес"  title="Укажите на карте местоположение">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </div>

                        <div class="modal-footer">
                            <a class="btn btn-primary right type-them" href="#myCarousel" data-slide="next">Далее</a>
                        </div>
                    </div>

                </div>

                <!--slide 2-->
                <div class="item">
                    <div class="modal-content c-modal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><a data-target="#myCarousel" data-slide-to="0" href="#">1</a> / 2. Регистрация команды (Контакты духовника)</h4>
                        </div>
                        <div class="modal-body">

                            <!--first row-->
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="input-container">
                                        <label for="g-fio-confessor">ФИО Духовника</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-arrows"></i></span>
                                            <input id="g-fio-confessor" type="text" name="name_confessor" class="form-control" placeholder="ФИО Духовника" title="ФИО Духовника">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-container">
                                        <label for="g-confessor-san">Сан Духовника</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i><i class="i_group-book glyphicon glyphicon-grain"></i></span>
                                            <input id="g-confessor-san" type="text" name="san_confessor" class="form-control" placeholder="Сан Духовника" title="Сан Духовника">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--second row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-container">
                                        <label for="g-confessor-phone">тел. номер духовника</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input id="g-confessor-phone" type="text" name="confessor_phone" class="form-control masked" placeholder="тел. номер духовника" title="тел. номер духовника">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-container">
                                        <label for="g-confessor-email">E-mail духовника</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                            <input id="g-confessor-email" type="text" name="confessor_email" class="form-control" placeholder="E-mail духовника" title="E-mail духовника">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--third row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-container">
                                        <label for="g-confessor-contacts">Дополнительные контакты духовника</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-external-link"></i></span>
                                            <textarea rows="6" id="g-confessor-contacts" type="text" name="confessor_contacts" class="form-control" placeholder="Дополнительные контакты" title="Дополнительные контакты духовника"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a class="btn btn-default right type-them" href="#myCarousel" data-slide="prev">Назад</a>
                            <a class="btn btn-primary right type-them" href="#myCarousel" data-slide="next">Далее</a>
                        </div>
                    </div>
                </div>

                <!--
                 (varchar 32)
                 (varchar 64)
                 (text)
                confessor_contacts (text)
                advanced_data (text)-->

                <!--slide 3-->
                <div class="item">
                    <div class="modal-content c-modal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><a data-target="#myCarousel" data-slide-to="0" href="#">1</a> / <a data-target="#myCarousel" data-slide-to="1" href="#">2</a> / 3. Регистрация команды (Контакты руководителя)</h4>
                        </div>
                        <div class="modal-body">

                            <!--first row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-container">
                                        <label for="g-name-boss">ФИО Руководителя</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input id="g-name-boss" type="text" name="name_boss" class="form-control" placeholder="ФИО Руководителя" title="ФИО Руководителя">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-container">
                                        <label for="g-leader-profession">Профессия Руководителя</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-mortar-board"></i></span>
                                            <input id="g-leader-profession" type="text" name="leader_profession" class="form-control" placeholder="Профессия Руководителя" title="Профессия Руководителя">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--second row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-container">
                                        <label for="g-leader-phone">тел. номер Руководителя</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input id="g-leader-phone" type="text" name="leader_phone" class="form-control masked" placeholder="тел. номер Руководителя" title="тел. номер Руководителя">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-container">
                                        <label for="g-leader-email">E-mail Руководителя</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                            <input id="g-leader-email" type="text" name="leader_email" class="form-control" placeholder="E-mail Руководителя" title="E-mail Руководителя">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--third row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-container">
                                        <label for="g-leder-contacts">Дополнительные контакты руководителя</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-external-link"></i></span>
                                            <textarea rows="6" id="g-leder-contacts" type="text" name="leder_contacts" class="form-control" placeholder="Дополнительные контакты" title="Дополнительные контакты духовника"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a class="btn btn-default right type-them" href="#myCarousel" data-slide="prev">Назад</a>
                            <a class="btn btn-primary right type-them" href="#myCarousel" data-slide="next">Далее</a>
                        </div>
                    </div>
                </div>

                <!--slide 4-->
                <div class="item">
                    <div class="modal-content c-modal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><a data-target="#myCarousel" data-slide-to="0" href="#">1</a> / <a data-target="#myCarousel" data-slide-to="1" href="#">2</a> / <a data-target="#myCarousel" data-slide-to="2" href="#">3</a> / 4.Регистрация команды (Немного цифер)</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="div col-md-6">
                                    <div class="input-container">
                                        <label for="number-of-persons">Кол-во человек в команде</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                            <input id="number-of-persons" type="text" name="number_of_persons" class="form-control" placeholder="Колличество человек в команде" title="Колличество человек в комманде">
                                        </div>
                                        <div class="input-description">Нам необходимо знать общее количество участников фестиваля, для планирования проведения мероприятий.</div>
                                    </div>

                                </div>
                                <div class="div col-md-6">
                                    <div class="input-container">
                                        <label for="total-number-of-persons">Общее кол-во человек</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="i_group glyphicon glyphicon-user"></i><i class="i_group i_group glyphicon glyphicon-user"></i><i class="i_group glyphicon glyphicon-user"></i></span>
                                            <input id="total-number-of-persons" type="text" name="total_number_of_persons" class="form-control" placeholder="Общее колличество человек (вместе с руководителями)" title="Общее колличество человек в комманде">
                                        </div>
                                        <div class="input-description">Общее кол-во человек, вместе с руководителями и сопровождающими. <br/> Необходимо чтобы зарезервировать место для лагеря и обеспечить трансфер.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-container">
                                        <label for="g-min-age">Минимальный возраст участников</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="small glyphicon glyphicon-user"></i></span>
                                            <input id="g-min-age" type="text" name="age_from" class="form-control" placeholder="От" title="Минимальный возраст участника">
                                        </div>
                                        <div class="input-description">Укажите сколько лет самому маленькому участнику Вашей команды</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-container">
                                        <label for="g-max-age">Максимальный возраст участников</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="big glyphicon glyphicon-user"></i></span>
                                            <input id="g-max-age" type="text" name="age_to" class="form-control" placeholder="До" title="Максимальный возраст участника">
                                        </div>
                                        <div class="input-description">Максимальный возраст только участников. Возраст сопровождающих указывать не нужно.</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <a class="btn btn-default right type-them" href="#myCarousel" data-slide="prev">Назад</a>
                            <a class="btn btn-primary right type-them" href="#myCarousel" data-slide="next">Далее</a>
                        </div>
                    </div>
                </div>


                <!--slide 5-->
                <div class="item">
                    <div class="modal-content c-modal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><a data-target="#myCarousel" data-slide-to="0" href="#">1</a> / <a data-target="#myCarousel" data-slide-to="1" href="#">2</a> / <a data-target="#myCarousel" data-slide-to="2" href="#">3</a> / <a data-target="#myCarousel" data-slide-to="3" href="#">4</a> / 5. Регистрация команды (Выбор тематики)</h4>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">

                                    <!-- Nav Tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#agreed" data-toggle="tab">Одобренная</a>
                                        </li>
                                        <li>
                                            <a href="#optional" data-toggle="tab">Произвольная</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                     <div class="tab-content">
                                        <div class="tab-pane active"  id="agreed" >
                                            <div class="input-container">
                                                <label for="g-max-age">Тематика домашнего задания</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-ellipsis-h"></i></span>
                                                    <select title="Тематики" class="form-control" name="subjects_1" id="them">
                                                        <option value="1" ></option>
                                                    </select>
                                                </div>
                                                <div class="placeholder-style">Для фестиваля Духовный Сад Семиречья была выбрана тема «История русской Святости».<br/> В соответвии с тематикой был предложен выбор Святых, которых может представлять команда, но команды, готовившиеся к представляению святого, отсутствующего в списке могут выбрать даже того святого, которого нет в списке предложенных во вкладке
                                                    <a href="#optional" data-toggle="tab">Произвольная</a></div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="optional">
                                            <div class="input-container">
                                                <label for="g-max-age">Произвольная тематика домашнего задания</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-ellipsis-h"></i></span>
                                                    <input autocomplete="off" type="text" id="subjects_name"  name="subjects_name_2" class="form-control" placeholder="Начните вводить имя святого" title="">
                                                    <input type="text" name="subjects_2" id="subjects_2" class="hide">
                                                </div>
                                                <div class="event">
                                                    <ul class="s-list " id="find-list">
                                                        <li class="placeholder-style" style="text-align: center; padding: 15px;">Начните вводить в поле выше Имя святого. <br/> И в этом месте оборазятся святые, соответствующие Вашему запросу. <br/> Базу святых и праздников мы взяли с pravoslavie.ru</li>
                                                    </ul>
                                                </div>
                                                <p>Мы понимаем, что база может быть не полной, и чтобы выбрать святого, которого нет даже в этой базе, Вы можете его добавить самостоятельно. </p>
                                                <div class="claerfix"></div>
                                                <div class="input-description">Базу данных святых мы взяли с сайта <a href="http://days.pravoslavie.ru/">days.pravoslavie.ru</a> Надеемся, они нас простят.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-default right type-them" href="#myCarousel" data-slide="prev">Назад</a>
                            <a class="btn btn-primary right type-them" href="#myCarousel" data-slide="next">Далее</a>
                        </div>
                    </div>
                </div>


                <!--slide 6 final-->
                <div class="item">
                    <div class="modal-content c-modal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Регистрация команды (Дополнительная информация)</h4>
                        </div>
                        <div class="modal-body">



                        </div>

                        <div style="font-size: 20px;" class="label label-warning" id="mess" ></div>
                        <div class="modal-footer">
                                <a class="btn btn-danger left" href="#myCarousel" data-slide="prev">Назад</a>
                                <div type="submit"  id="add_group" class="btn btn-primary">Создать</div>
                        </div>
                    </div>
                </div>

            </div>
            </form>

        </div>
    </div>
</div>

<!--<div id="select-group" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-sm normal-font">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
            <form action="<?php /*bloginfo('url'); */?>/index.php/grouprg" method="post" id="group_add" name="group_add" >
                <div class="carousel-inner">
                    <div class="item active">
                        <div  class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Выбор группы</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="i_group glyphicon glyphicon-user"></i><i class="i_group i_group-center glyphicon glyphicon-user"></i><i class="i_group glyphicon glyphicon-user"></i></span>
                                            <select type="text" name="name_gr" class="form-control" id="group-id" title="Название команды">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div style="font-size: 20px;" class="label label-warning" id="mess_gr" ></div>
                            <div class="modal-footer">
                                <a id="selected-group" class="btn btn-primary right">Выбрать</a>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div>
</div>-->

<!--добавление святого-->

<div class="modal fade normal-font" id="add-saint-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Добавление Святого (тематики) в базу</h4>
            </div>
            <div class="modal-body" >
                <form>
                    <!--second row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-container">
                                <label for="g-saint-name">Каноническое имя святого</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-arrows"></i></span>
                                    <input id="g-saint-name" type="text" name="name" class="form-control" placeholder="Каноническое имя святого" title="Каноническое имя святого">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-container">
                                <label for="g-saint-href">Ссылка на подробное житие</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                    <input id="g-saint-href" type="text" name="href" class="form-control" placeholder="Ссылка на подробное житие" title="Ссылка на подробное житие">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--third row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-container">
                                <label for="g-saint-history">Краткое описание (краткое житие)</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-external-link"></i></span>
                                    <textarea rows="6" id="g-saint-history" type="text" name="description" class="form-control" placeholder="Краткое описание (краткое житие)" title="Краткое описание (краткое житие)"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input hidden value="submit" name="add_direct" type="text">
                </form>
            </div>
            <div class="modal-footer" id="add-saint-modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button id="add-saint" type="button" class="btn btn-primary" data-dismiss="modal" >Добавить</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--карта для выбора геопозиции-->

<div class="modal fade map-modal normal-font" tabindex="-1" role="dialog" aria-labelledby="map-modal">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Укажите на карте Ваш храм (<span class="modal-header-church"></span>)</h4>
            </div>
            <div style="min-height: 70vh; height: 300px; padding: 0;"  id="map-modal-body" class="modal-body">
                <!--<div class="church"> </div>-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-primary btn-map-modal-ok" data-geocode="0,0,5" data-dismiss="modal">Сохранить</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--подробная информация о святом-->

<div class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Название модали</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Сохранить изменения</button>
            </div>
        </div>
    </div>
</div>

<div class="hidden">
    <li class="placeholder-empty placeholder-style" style="text-align: center; padding: 15px;">Начните вводить в поле выше Имя святого. <br/> И в этом месте оборазятся святые, соответствующие Вашему запросу. <br/> Базу святых и праздников мы взяли с pravoslavie.ru</li>
    <li class="placeholder-not-found" style="text-align: center; padding: 15px;" >По вашему запросу ничего не найдено, <br/> Вы можете добавить святого в нашу базу<br/>
        <button onclick="return false;" class="btn btn-success" data-toggle="modal" data-target="#add-saint-modal">Добавить святого</button>
    </li>
</div>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&load=package.full" type="text/javascript"></script>

<script>
    var map;
    var mainPlacemark;
    $(document).ready(function () {
        console.log($('.map-modal').on('shown.bs.modal', function () {
            $('#map-modal-body').html('');
            var geopos = $('.btn-map-modal-ok').data('geocode').split(',');
            console.info(geopos);
            var locate = false;
            var zoom = geopos[2];
            geopos = geopos.slice(0,-1);
            console.info(geopos);
            if(geopos[0] === '0' && geopos[1] === '0'){
                console.info('пустые координаты, ');
                locate = true;
                geopos = [47.729, 64.892]
                zoom = 5;
            }
            console.info('cretion map');
            console.info(geopos);
            map = new ymaps.Map("map-modal-body", {
                center: geopos,
                zoom: zoom,
                controls: ["geolocationControl","searchControl","typeSelector","fullscreenControl","zoomControl"]
            });


            ymaps.geolocation.get({
                provider: 'yandex',
                mapStateAutoApply: locate
            }).then(function (result) {
                if(locate){
                    map.geoObjects.add(result.geoObjects);
                    geopos = result.geoObjects.position;
                    console.info('new geoposition');
                    console.info(geopos);
                } else{
                    console.info('old geoposition');
                    console.info(geopos);
                }

                mainPlacemark = new ymaps.Placemark(geopos,
                    {
                        hintContent: 'Переместите эту метку в то место, где находися Ваш храм'

                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: 'http://fest-dss.kz/wp-content/themes/fest/public/img/placemark-c.png',
                        iconImageSize: [40, 80],
                        iconImageOffset: [-20, -80],
                        draggable: true
                    });

                var c = mainPlacemark.geometry.getCoordinates();
                $('.modal-header-church').html(c[0] + ',' + c[1] + ',' + map.getZoom());
                $('.btn-map-modal-ok').data('geocode', c[0] + ',' + c[1] + ',' + map.getZoom());

                map.geoObjects.add(mainPlacemark);

                mainPlacemark.events.add('dragend', function () {
                    c = mainPlacemark.geometry.getCoordinates();
                    $('.modal-header-church').html(c[0] + ',' + c[1] + ',' + map.getZoom());
                    $('.btn-map-modal-ok').data('geocode', c[0] + ',' +  c[1] + ',' + map.getZoom());
                });
            });

        }));

        $('.btn-map-modal-ok').click(function () {
            $('#g-geoposition').val($(this).data('geocode'));
        });


        $('.church').click(function () {
            console.info(map.getCenter());
        })
    });
</script>

<div id="vkapi_body">
    <div id="vk_api_transport" style="position: absolute; top: -10000px;"><script type="text/javascript" src="https://vk.com/js/api/openapi.js" async=""></script></div>
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

            </div>
            <div class="authors normal-font">
                <p>Разработка и поддержка B-link.kz</p>
                <p>Design B-link.kz studio</p>
            </div>
        </div>

</footer>
<!-- end auth modal -->


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter20742871 = new Ya.Metrika({
                    id:20742871,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/20742871" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>