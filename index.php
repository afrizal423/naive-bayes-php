<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
        <!--Import materialize.css-->
        <link
            type="text/css"
            rel="stylesheet"
            href="assets/css/materialize.min.css"
            media="screen,projection"/>
        <script type="text/javascript" src="ajax/jquery-1.2.3.min.js"></script>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script>
            $(document).ready(function () {

                $()
                    .ajaxStart(function () {
                        $('#loading').show();
                        $('#result').hide();
                    })
                    .ajaxStop(function () {
                        $('#loading').hide();
                        $('#result').fadeIn('slow');
                    });

                $('#myForm').submit(function () {
                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        success: function (data) {
                            $('#result').html(data);
                        }
                    })
                    return false;
                });
            })
        </script>
        <style>
            #grad1 {
                height: 200px;
                background-color: #1ca7ec;
                /* For browsers that do not support gradients */
                background-image: linear-gradient(-90deg, #787FF6,#78d5f5, #4ADEDE);
                /* Standard syntax (must be last) */
            }
            @font-face {
                font-family: "My Custom Font";
                src: url("font.ttf") format("truetype");
            }
            div.customfont {
                font-family: "My Custom Font";
            }
        </style>
    </head>

    <body id="grad1">
        <div
            class="customfont center"
            style="font-size:50pt; color: aliceblue;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Naive Bayes Classifier</div>

        <div class="row container">
            <img
                class="center-align responsive-img"
                style="display: block;margin-left: auto; margin-right: auto;"
                src="stat.png">
            <form id="myForm" method="post" action="hitung.php">
                <div class="col s12 card z-depth-4">

                    <table>
                        <thead>
                            <tr>
                                <th>Mata Pelajaran</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Bahasa Inggris(Bi)</td>
                                <td>
                                    <div class="input-field">
                                        <input id="c1" type="text" class="validate" name="hasil[0]">
                                        <label for="c1">Bahasa Inggris</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Pendidikan Agama Islam(Pi)</td>
                                <td>
                                    <div class="input-field">
                                        <input id="c2" type="text" class="validate" name="hasil[1]">
                                        <label for="c2">Agama Islam</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sejarah(Sj)</td>
                                <td>
                                    <div class="input-field">
                                        <input id="c3" type="text" class="validate" name="hasil[2]">
                                        <label for="c3">Sejarah</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Matematika(Mm)</td>
                                <td>
                                    <div class="input-field">
                                        <input id="c4" type="text" class="validate" name="hasil[3]">
                                        <label for="c4">Matematika</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Matematika Tambahan(Mt)</td>
                                <td>
                                    <div class="input-field">
                                        <input id="c5" type="text" class="validate" name="hasil[4]">
                                        <label for="c5">Matematika Tambahan</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Fisika(Fz)</td>
                                <td>
                                    <div class="input-field">
                                        <input id="c6" type="text" class="validate" name="hasil[5]">
                                        <label for="c6">Fisika</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Kimia(Km)</td>
                                <td>
                                    <div class="input-field">
                                        <input id="c7" type="text" class="validate" name="hasil[6]">
                                        <label for="c7">Kimia</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tr></tbody>
                        <tr>

                            <td height="23" colspan="4" align="right">
                                <button
                                    class="btn waves-effect waves-light"
                                    type="submit"
                                    name="action"
                                    value="Submit">Hitung Semua
                                    <i class="material-icons right">send</i>
                                </button>
                                <!-- <input type="submit" value="Submit" /> -->
                            </td>

                        </tr>
                    </table>
                </form>

                <span id="result" style="display:none;"></span>
            </div>
        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>

        <script>
            $(document).ready(function () {
                $('select').formSelect();
            });
        </script>
    </body>
</html>