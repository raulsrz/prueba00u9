<?php

/* factura/show.html.twig */
class __TwigTemplate_4800cda9b60c7c07db457b8495066f7fc6e9311bdffebc0dea99d47b3c4c0032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "idioma", array()) == "Ingles")) {
            // line 2
            echo "    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>New bill</title>
        <link rel=\"stylesheet\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/reporte.css"), "html", null, true);
            echo "\">
    </head>
    <body>
    <div class=\"control-bar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-2-4\">
                    <div class=\"slogan\">Billing </div>



                </div>
                <div class=\"col-4 text-right\">
                    <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("factura_index");
            echo "\">Back</a>
                    <a href=\"javascript:window.print()\">Print</a>
                </div><!--.col-->
            </div><!--.row-->
        </div><!--.container-->
    </div><!--.control-bar-->

    <header class=\"row\">
        <div class=\"logoholder text-center\" >
            <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo2.png"), "html", null, true);
            echo "\">
        </div><!--.logoholder-->

        <div class=\"me\">
            <p>
                <strong>Rady Fresh Fruit LLC</strong><br>
                ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : null), "direccion", array()), "html", null, true);
            echo "<br>


            </p>
        </div><!--.me-->

        <div class=\"info\">
            <p>
                Web: <a href=\"http://www.radyfreshfruit.com\"> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : null), "web", array()), "html", null, true);
            echo "</a><br>
                E-mail: <a href=\"mailto:salescucho@gmail.com\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : null), "email", array()), "html", null, true);
            echo "</a><br>
                Tel: ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : null), "telefono", array()), "html", null, true);
            echo "<br>
            </p>
        </div><!-- .info -->

        <div class=\"bank\">
            <p>
                Bank data:  ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : null), "datobancario", array()), "html", null, true);
            echo "<br>
                Account holder: ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : null), "titular", array()), "html", null, true);
            echo " <br>
                IBAN: ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : null), "iban", array()), "html", null, true);
            echo "<br>
                BIC: ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : null), "bic", array()), "html", null, true);
            echo "
            </p>
        </div><!--.bank-->


    </header>


    <div class=\"row section\">

        <div class=\"col-2\">
            <h1>Bill</h1>
        </div><!--.col-->

        <div class=\"col-2 text-right details\">
            <p>
                Date: ";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "fecha", array()), "m/d/Y"), "html", null, true);
            echo "<br>
                Bill #: ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "id", array()), "html", null, true);
            echo "<br>

            </p>
        </div><!--.col-->



        <div class=\"col-2\">


            <p class=\"client\">
                <strong>Send to:</strong><br>
                Client name: ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "nombcliente", array()), "html", null, true);
            echo "<br>
                Company name: ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "nombempresa", array()), "html", null, true);
            echo "<br>
                Company address: ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "direcmpresa", array()), "html", null, true);
            echo "<br>
                company phone: ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "telecmpresa", array()), "html", null, true);
            echo "
            </p>
        </div><!--.col-->





    </div><!--.row-->

    <div class=\"row section\" style=\"margin-top:-1rem\">
        <div class=\"col-1\">
            <table style='width:100%'>
                <thead>
                <tr class=\"invoice_detail\">
                    <th width=\"25%\" style=\"text-align\">Seller</th>

                    <th width=\"30%\">Terms and Conditions</th>
                </tr>
                </thead>
                <tbody>
                <tr class=\"invoice_detail\">
                    <td width=\"25%\" style=\"text-align\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "nombvendedor", array()), "html", null, true);
            echo "</td>

                    <td width=\"30%\">Cash payment</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div><!--.row-->

    <div class=\"invoicelist-body\">
        <table>
            <thead>
            ";
            // line 121
            if (($this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "productoid", array()), "nombre", array()) == "Pineapple")) {
                // line 122
                echo "                <th width=\"5%\">Size</th>
            ";
            } else {
                // line 124
                echo "                <th width=\"5%\">Quality</th>
            ";
            }
            // line 126
            echo "
            <th width=\"60%\">Product</th>
            ";
            // line 128
            if (($this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "productoid", array()), "nombre", array()) == "Pineapple")) {
                // line 129
                echo "                <th width=\"10%\">Pallet</th>
            ";
            }
            // line 131
            echo "
            <th width=\"10%\">Boxes</th>


            <th width=\"15%\">Price</th>
            <th class=\"taxrelated\">Tax/unit</th>
            <th width=\"10%\">Total</th>
            </thead>
            <tbody>
            ";
            // line 140
            $context["totalpallet"] = "0";
            // line 141
            echo "            ";
            $context["impuestotal"] = "0";
            // line 142
            echo "            ";
            $context["sumatotal"] = "0";
            // line 143
            echo "            ";
            $context["sumacajas"] = "0";
            // line 144
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 145
                echo "                <tr>
                    <td width='5%'><span>";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
                echo "</span></td>
                    <td width='60%'><span>";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "productoid", array()), "html", null, true);
                echo "</span></td>
                    ";
                // line 148
                if (($this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "productoid", array()), "nombre", array()) == "Pineapple")) {
                    // line 149
                    echo "                        <td class=\"amount\"><span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
                    echo "</span></td>
                        ";
                    // line 150
                    $context["totalcajas"] = ($this->getAttribute($context["producto"], "cantidad", array()) * 80);
                    // line 151
                    echo "                    ";
                } else {
                    // line 152
                    echo "                        ";
                    $context["totalcajas"] = $this->getAttribute($context["producto"], "cantidad", array());
                    // line 153
                    echo "                    ";
                }
                // line 154
                echo "

                    ";
                // line 156
                $context["totalpallet"] = ((isset($context["totalpallet"]) ? $context["totalpallet"] : null) + $this->getAttribute($context["producto"], "cantidad", array()));
                // line 157
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "productoid", array()), "nombre", array()) == "Pineapple")) {
                    // line 158
                    echo "                        ";
                    $context["sumacajas"] = (($this->getAttribute($context["producto"], "cantidad", array()) * 80) + (isset($context["sumacajas"]) ? $context["sumacajas"] : null));
                    // line 159
                    echo "                    ";
                } else {
                    // line 160
                    echo "                        ";
                    $context["sumacajas"] = ($this->getAttribute($context["producto"], "cantidad", array()) + (isset($context["sumacajas"]) ? $context["sumacajas"] : null));
                    // line 161
                    echo "                    ";
                }
                // line 162
                echo "
                    ";
                // line 163
                if (($this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "productoid", array()), "nombre", array()) == "Pineapple")) {
                    // line 164
                    echo "                        <td width='5%'><span>";
                    echo twig_escape_filter($this->env, (isset($context["totalcajas"]) ? $context["totalcajas"] : null), "html", null, true);
                    echo "</span></td>
                        ";
                } else {
                    // line 166
                    echo "                            <td width='5%'><span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
                    echo "</span></td>
                    ";
                }
                // line 168
                echo "


                    ";
                // line 171
                if (($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "moneda", array()) == "Dolar")) {
                    // line 172
                    echo "                        <td class=\"rate\"><span>\$";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "precio", array()), 2, ".", ""), "html", null, true);
                    echo "</span></td>
                    ";
                } else {
                    // line 174
                    echo "                        <td class=\"rate\"><span>€";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "precio", array()), 2, ".", ""), "html", null, true);
                    echo "</span></td>
                    ";
                }
                // line 176
                echo "

                    ";
                // line 178
                $context["total"] = (($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "precio", array()) * (isset($context["totalcajas"]) ? $context["totalcajas"] : null)) + ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "impuesto", array()) * (isset($context["totalcajas"]) ? $context["totalcajas"] : null)));
                // line 179
                echo "                    ";
                if (($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "moneda", array()) == "Dolar")) {
                    // line 180
                    echo "                        <td class=\"tax taxrelated\">\$";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "impuesto", array()), 2, ".", ""), "html", null, true);
                    echo "</td>
                        <td class=\"sum\">\$";
                    // line 181
                    echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
                    echo "</td>
                    ";
                } else {
                    // line 183
                    echo "                        <td class=\"tax taxrelated\">€";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "impuesto", array()), 2, ".", ""), "html", null, true);
                    echo "</td>
                        <td class=\"sum\">€";
                    // line 184
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ".", ""), "html", null, true);
                    echo "</td>
                    ";
                }
                // line 186
                echo "
                    ";
                // line 187
                $context["impuestotal"] = ((isset($context["impuestotal"]) ? $context["impuestotal"] : null) + ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "impuesto", array()) * (isset($context["totalcajas"]) ? $context["totalcajas"] : null)));
                // line 188
                echo "                    ";
                $context["sumatotal"] = (((isset($context["sumatotal"]) ? $context["sumatotal"] : null) + ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "precio", array()) * (isset($context["totalcajas"]) ? $context["totalcajas"] : null))) + ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "impuesto", array()) * (isset($context["totalcajas"]) ? $context["totalcajas"] : null)));
                // line 189
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "            <tr>
                <td></td>
                <td></td>
                ";
            // line 194
            if (($this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "productoid", array()), "nombre", array()) == "Pineapple")) {
                // line 195
                echo "                    <td>
                        <strong>";
                // line 196
                echo twig_escape_filter($this->env, (isset($context["totalpallet"]) ? $context["totalpallet"] : null), "html", null, true);
                echo "</strong>

                    </td>

                ";
            }
            // line 201
            echo "
                <td>
                    <strong>";
            // line 203
            echo twig_escape_filter($this->env, (isset($context["sumacajas"]) ? $context["sumacajas"] : null), "html", null, true);
            echo "</strong>
                </td>
                <td></td>
                <td></td>
                <td></td>


            </tr>
            </tbody>
        </table>

    </div><!--.invoice-body-->

    <div class=\"invoicelist-footer\">
        <table>
            ";
            // line 218
            if (($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "moneda", array()) == "Dolar")) {
                // line 219
                echo "
                <tr class=\"taxrelated\">
                    <td>Tax:</td>

                    <td id=\"total_tax\">\$";
                // line 223
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["impuestotal"]) ? $context["impuestotal"] : null), 2, ".", ""), "html", null, true);
                echo "</td>
                </tr>
                <tr>
                    <td><strong>Total:</strong></td>
                    <td id=\"total_price\">\$";
                // line 227
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumatotal"]) ? $context["sumatotal"] : null), 2, ".", ""), "html", null, true);
                echo "</td>
                </tr>
            ";
            } else {
                // line 230
                echo "                <tr class=\"taxrelated\">
                    <td>Tax:</td>

                    <td id=\"total_tax\">€";
                // line 233
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["impuestotal"]) ? $context["impuestotal"] : null), 2, ".", ""), "html", null, true);
                echo "</td>
                </tr>
                <tr>
                    <td><strong>Total:</strong></td>
                    <td id=\"total_price\">€";
                // line 237
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumatotal"]) ? $context["sumatotal"] : null), 2, ".", ""), "html", null, true);
                echo "</td>
                </tr>


            ";
            }
            // line 242
            echo "
        </table>
    </div>

    <div class=\"note\">
        <h2>Note: ";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "nota", array()), "html", null, true);
            echo "</h2>
    </div><!--.note-->

    <footer class=\"row\">

    </footer>

    </body>
    </html>
";
        } else {
            // line 257
            echo "    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Crear facturas</title>
        <link rel=\"stylesheet\" href=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/reporte.css"), "html", null, true);
            echo "\">
    </head>
    <body>
    <div class=\"control-bar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-2-4\">
                    <div class=\"slogan\">Facturación </div>



                </div>
                <div class=\"col-4 text-right\">
                    <a href=\"";
            // line 275
            echo $this->env->getExtension('routing')->getPath("factura_index");
            echo "\">Atras</a>
                    <a href=\"javascript:window.print()\">Imprimir</a>
                </div><!--.col-->
            </div><!--.row-->
        </div><!--.container-->
    </div><!--.control-bar-->

    <header class=\"row\">
        <div class=\"logoholder text-center\" >
            <img src=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo2.png"), "html", null, true);
            echo "\">
        </div><!--.logoholder-->

        <div class=\"me\">
            <p>
                <strong>Rady Fresh Fruit LLC</strong><br>
                ";
            // line 290
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : null), "direccion", array()), "html", null, true);
            echo "<br>

            </p>
        </div><!--.me-->

        <div class=\"info\">
            <p>
                Web: <a href=\"http://www.radyfreshfruit.com\"> ";
            // line 297
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : null), "web", array()), "html", null, true);
            echo "</a><br>
                E-mail: <a href=\"mailto:salescucho@gmail.com\">";
            // line 298
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : null), "email", array()), "html", null, true);
            echo "</a><br>
                Tel: ";
            // line 299
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dato"]) ? $context["dato"] : null), "telefono", array()), "html", null, true);
            echo "<br>
            </p>
        </div><!-- .info -->

        <div class=\"bank\">
            <p>
                Datos bacarios: <br>
                Titular de la cuenta: <br>
                IBAN: <br>
                BIC:
            </p>
        </div><!--.bank-->

    </header>


    <div class=\"row section\">

        <div class=\"col-2\">
            <h1>Factura</h1>
        </div><!--.col-->

        <div class=\"col-2 text-right details\">
            <p>
                Fecha: ";
            // line 323
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "fecha", array()), "d/m/Y"), "html", null, true);
            echo "<br>
                Factura #: ";
            // line 324
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "id", array()), "html", null, true);
            echo "<br>

            </p>
        </div><!--.col-->



        <div class=\"col-2\">


            <p class=\"client\">
                <strong>Enviar a:</strong><br>
                Nombre cliente: ";
            // line 336
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "nombcliente", array()), "html", null, true);
            echo "<br>
                Nombre emmpresa: ";
            // line 337
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "nombempresa", array()), "html", null, true);
            echo "<br>
                Dirección empresa: ";
            // line 338
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "direcmpresa", array()), "html", null, true);
            echo "<br>
                Tel empresa: ";
            // line 339
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "telecmpresa", array()), "html", null, true);
            echo "
            </p>
        </div><!--.col-->





    </div><!--.row-->

    <div class=\"row section\" style=\"margin-top:-1rem\">
        <div class=\"col-1\">
            <table style='width:100%'>
                <thead>
                <tr class=\"invoice_detail\">
                    <th width=\"25%\" style=\"text-align\">Vendedor</th>

                    <th width=\"30%\">Términos y condiciones</th>
                </tr>
                </thead>
                <tbody>
                <tr class=\"invoice_detail\">
                    <td width=\"25%\" style=\"text-align\">";
            // line 361
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "nombvendedor", array()), "html", null, true);
            echo "</td>

                    <td width=\"30%\">Pago al contado</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div><!--.row-->

    <div class=\"invoicelist-body\">
        <table>
            <thead>
            ";
            // line 374
            if (($this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "productoid", array()), "nombre", array()) == "Pineapple")) {
                // line 375
                echo "                <th width=\"5%\">Size</th>
            ";
            } else {
                // line 377
                echo "                <th width=\"5%\">Calidad</th>
            ";
            }
            // line 379
            echo "            <th width=\"60%\">Producto</th>
             ";
            // line 380
            if (($this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "productoid", array()), "nombre", array()) == "Pineapple")) {
                // line 381
                echo "                <th width=\"10%\">Pallet</th>
            ";
            }
            // line 383
            echo "          
            <th width=\"30%\">Cajas</th>



            <th width=\"100%\">Precio/caja</th>
            <th class=\"taxrelated\">Impuesto/caja</th>
            <th width=\"10%\">Total</th>
            </thead>
            <tbody>
            ";
            // line 393
            $context["totalpallet"] = "0";
            // line 394
            echo "            ";
            $context["impuestotal"] = "0";
            // line 395
            echo "            ";
            $context["sumatotal"] = "0";
            // line 396
            echo "            ";
            $context["sumacajas"] = "0";
            // line 397
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 398
                echo "                <tr>
                    <td width='5%'><span>";
                // line 399
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "nombre", array()), "html", null, true);
                echo "</span></td>
                    <td width='60%'><span>";
                // line 400
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "productoid", array()), "html", null, true);
                echo "</span></td>
                    ";
                // line 401
                if (($this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "productoid", array()), "nombre", array()) == "Pineapple")) {
                    // line 402
                    echo "                        <td class=\"amount\"><span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
                    echo "</span></td>
                        ";
                    // line 403
                    $context["totalcajas"] = ($this->getAttribute($context["producto"], "cantidad", array()) * 80);
                    // line 404
                    echo "                    ";
                } else {
                    // line 405
                    echo "                        ";
                    $context["totalcajas"] = $this->getAttribute($context["producto"], "cantidad", array());
                    // line 406
                    echo "                    ";
                }
                // line 407
                echo "

                    ";
                // line 409
                $context["totalpallet"] = ((isset($context["totalpallet"]) ? $context["totalpallet"] : null) + $this->getAttribute($context["producto"], "cantidad", array()));
                // line 410
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "productoid", array()), "nombre", array()) == "Pineapple")) {
                    // line 411
                    echo "                        ";
                    $context["sumacajas"] = (($this->getAttribute($context["producto"], "cantidad", array()) * 80) + (isset($context["sumacajas"]) ? $context["sumacajas"] : null));
                    // line 412
                    echo "                    ";
                } else {
                    // line 413
                    echo "                        ";
                    $context["sumacajas"] = ($this->getAttribute($context["producto"], "cantidad", array()) + (isset($context["sumacajas"]) ? $context["sumacajas"] : null));
                    // line 414
                    echo "                    ";
                }
                // line 415
                echo "
                    ";
                // line 416
                if (($this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "productoid", array()), "nombre", array()) == "Pineapple")) {
                    // line 417
                    echo "                        <td width='5%'><span>";
                    echo twig_escape_filter($this->env, (isset($context["totalcajas"]) ? $context["totalcajas"] : null), "html", null, true);
                    echo "</span></td>
                    ";
                } else {
                    // line 419
                    echo "                        <td width='5%'><span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
                    echo "</span></td>
                    ";
                }
                // line 421
                echo "


                    ";
                // line 424
                if (($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "moneda", array()) == "Dolar")) {
                    // line 425
                    echo "                        <td class=\"rate\"><span>\$";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "precio", array()), 2, ".", ""), "html", null, true);
                    echo "</span></td>
                    ";
                } else {
                    // line 427
                    echo "                        <td class=\"rate\"><span>€";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "precio", array()), 2, ".", ""), "html", null, true);
                    echo "</span></td>
                    ";
                }
                // line 429
                echo "

                    ";
                // line 431
                $context["total"] = (($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "precio", array()) * (isset($context["totalcajas"]) ? $context["totalcajas"] : null)) + ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "impuesto", array()) * (isset($context["totalcajas"]) ? $context["totalcajas"] : null)));
                // line 432
                echo "                    ";
                if (($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "moneda", array()) == "Dolar")) {
                    // line 433
                    echo "                        <td class=\"tax taxrelated\">\$";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "impuesto", array()), 2, ".", ""), "html", null, true);
                    echo "</td>
                        <td class=\"sum\">\$";
                    // line 434
                    echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
                    echo "</td>
                    ";
                } else {
                    // line 436
                    echo "                        <td class=\"tax taxrelated\">€";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "impuesto", array()), 2, ".", ""), "html", null, true);
                    echo "</td>
                        <td class=\"sum\">€";
                    // line 437
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ".", ""), "html", null, true);
                    echo "</td>
                    ";
                }
                // line 439
                echo "
                    ";
                // line 440
                $context["impuestotal"] = ((isset($context["impuestotal"]) ? $context["impuestotal"] : null) + ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "impuesto", array()) * (isset($context["totalcajas"]) ? $context["totalcajas"] : null)));
                // line 441
                echo "                    ";
                $context["sumatotal"] = (((isset($context["sumatotal"]) ? $context["sumatotal"] : null) + ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "precio", array()) * (isset($context["totalcajas"]) ? $context["totalcajas"] : null))) + ($this->getAttribute($this->getAttribute($context["producto"], "producto", array()), "impuesto", array()) * (isset($context["totalcajas"]) ? $context["totalcajas"] : null)));
                // line 442
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 444
            echo "            <tr>
                <td></td>
                <td></td>
                 ";
            // line 447
            if (($this->getAttribute($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "productoid", array()), "nombre", array()) == "Pineapple")) {
                // line 448
                echo "                <strong>";
                echo twig_escape_filter($this->env, (isset($context["totalpallet"]) ? $context["totalpallet"] : null), "html", null, true);
                echo "</strong>
                ";
            }
            // line 449
            echo " 
               
                <td>
                    <strong>";
            // line 452
            echo twig_escape_filter($this->env, (isset($context["sumacajas"]) ? $context["sumacajas"] : null), "html", null, true);
            echo "</strong>
                </td>
                <td></td>
                <td></td>
                <td></td>


            </tr>
            </tbody>
        </table>

    </div><!--.invoice-body-->

    <div class=\"invoicelist-footer\">
        <table>
            ";
            // line 467
            if (($this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "moneda", array()) == "Dolar")) {
                // line 468
                echo "
                <tr class=\"taxrelated\">
                    <td>Impuesto:</td>

                    <td id=\"total_tax\">\$";
                // line 472
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["impuestotal"]) ? $context["impuestotal"] : null), 2, ".", ""), "html", null, true);
                echo "</td>
                </tr>
                <tr>
                    <td><strong>Total:</strong></td>
                    <td id=\"total_price\">\$";
                // line 476
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumatotal"]) ? $context["sumatotal"] : null), 2, ".", ""), "html", null, true);
                echo "</td>
                </tr>
            ";
            } else {
                // line 479
                echo "                <tr class=\"taxrelated\">
                    <td>Impuesto:</td>

                    <td id=\"total_tax\">€";
                // line 482
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["impuestotal"]) ? $context["impuestotal"] : null), 2, ".", ""), "html", null, true);
                echo "</td>
                </tr>
                <tr>
                    <td><strong>Total:</strong></td>
                    <td id=\"total_price\">€";
                // line 486
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumatotal"]) ? $context["sumatotal"] : null), 2, ".", ""), "html", null, true);
                echo "</td>
                </tr>


            ";
            }
            // line 491
            echo "
        </table>
    </div>

    <div class=\"note\">
        <h2>Nota: ";
            // line 496
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : null), "nota", array()), "html", null, true);
            echo "</h2>
    </div><!--.note-->

    <footer class=\"row\">

    </footer>

    </body>
    </html>
";
        }
    }

    public function getTemplateName()
    {
        return "factura/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  896 => 496,  889 => 491,  881 => 486,  874 => 482,  869 => 479,  863 => 476,  856 => 472,  850 => 468,  848 => 467,  830 => 452,  825 => 449,  819 => 448,  817 => 447,  812 => 444,  805 => 442,  802 => 441,  800 => 440,  797 => 439,  792 => 437,  787 => 436,  782 => 434,  777 => 433,  774 => 432,  772 => 431,  768 => 429,  762 => 427,  756 => 425,  754 => 424,  749 => 421,  743 => 419,  737 => 417,  735 => 416,  732 => 415,  729 => 414,  726 => 413,  723 => 412,  720 => 411,  717 => 410,  715 => 409,  711 => 407,  708 => 406,  705 => 405,  702 => 404,  700 => 403,  695 => 402,  693 => 401,  689 => 400,  685 => 399,  682 => 398,  677 => 397,  674 => 396,  671 => 395,  668 => 394,  666 => 393,  654 => 383,  650 => 381,  648 => 380,  645 => 379,  641 => 377,  637 => 375,  635 => 374,  619 => 361,  594 => 339,  590 => 338,  586 => 337,  582 => 336,  567 => 324,  563 => 323,  536 => 299,  532 => 298,  528 => 297,  518 => 290,  509 => 284,  497 => 275,  481 => 262,  474 => 257,  461 => 247,  454 => 242,  446 => 237,  439 => 233,  434 => 230,  428 => 227,  421 => 223,  415 => 219,  413 => 218,  395 => 203,  391 => 201,  383 => 196,  380 => 195,  378 => 194,  373 => 191,  366 => 189,  363 => 188,  361 => 187,  358 => 186,  353 => 184,  348 => 183,  343 => 181,  338 => 180,  335 => 179,  333 => 178,  329 => 176,  323 => 174,  317 => 172,  315 => 171,  310 => 168,  304 => 166,  298 => 164,  296 => 163,  293 => 162,  290 => 161,  287 => 160,  284 => 159,  281 => 158,  278 => 157,  276 => 156,  272 => 154,  269 => 153,  266 => 152,  263 => 151,  261 => 150,  256 => 149,  254 => 148,  250 => 147,  246 => 146,  243 => 145,  238 => 144,  235 => 143,  232 => 142,  229 => 141,  227 => 140,  216 => 131,  212 => 129,  210 => 128,  206 => 126,  202 => 124,  198 => 122,  196 => 121,  180 => 108,  155 => 86,  151 => 85,  147 => 84,  143 => 83,  128 => 71,  124 => 70,  105 => 54,  101 => 53,  97 => 52,  93 => 51,  84 => 45,  80 => 44,  76 => 43,  65 => 35,  56 => 29,  44 => 20,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% if factura.idioma == 'Ingles' %}*/
/*     <!DOCTYPE html>*/
/*     <html lang="en">*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>New bill</title>*/
/*         <link rel="stylesheet" href="{{ asset('css/reporte.css') }}">*/
/*     </head>*/
/*     <body>*/
/*     <div class="control-bar">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-2-4">*/
/*                     <div class="slogan">Billing </div>*/
/* */
/* */
/* */
/*                 </div>*/
/*                 <div class="col-4 text-right">*/
/*                     <a href="{{ path('factura_index') }}">Back</a>*/
/*                     <a href="javascript:window.print()">Print</a>*/
/*                 </div><!--.col-->*/
/*             </div><!--.row-->*/
/*         </div><!--.container-->*/
/*     </div><!--.control-bar-->*/
/* */
/*     <header class="row">*/
/*         <div class="logoholder text-center" >*/
/*             <img src="{{ asset('img/logo2.png') }}">*/
/*         </div><!--.logoholder-->*/
/* */
/*         <div class="me">*/
/*             <p>*/
/*                 <strong>Rady Fresh Fruit LLC</strong><br>*/
/*                 {{ dato.direccion }}<br>*/
/* */
/* */
/*             </p>*/
/*         </div><!--.me-->*/
/* */
/*         <div class="info">*/
/*             <p>*/
/*                 Web: <a href="http://www.radyfreshfruit.com"> {{ dato.web }}</a><br>*/
/*                 E-mail: <a href="mailto:salescucho@gmail.com">{{ dato.email }}</a><br>*/
/*                 Tel: {{ dato.telefono }}<br>*/
/*             </p>*/
/*         </div><!-- .info -->*/
/* */
/*         <div class="bank">*/
/*             <p>*/
/*                 Bank data:  {{ dato.datobancario }}<br>*/
/*                 Account holder: {{ dato.titular }} <br>*/
/*                 IBAN: {{ dato.iban }}<br>*/
/*                 BIC: {{ dato.bic }}*/
/*             </p>*/
/*         </div><!--.bank-->*/
/* */
/* */
/*     </header>*/
/* */
/* */
/*     <div class="row section">*/
/* */
/*         <div class="col-2">*/
/*             <h1>Bill</h1>*/
/*         </div><!--.col-->*/
/* */
/*         <div class="col-2 text-right details">*/
/*             <p>*/
/*                 Date: {{ factura.fecha|date('m/d/Y') }}<br>*/
/*                 Bill #: {{ factura.id }}<br>*/
/* */
/*             </p>*/
/*         </div><!--.col-->*/
/* */
/* */
/* */
/*         <div class="col-2">*/
/* */
/* */
/*             <p class="client">*/
/*                 <strong>Send to:</strong><br>*/
/*                 Client name: {{ factura.nombcliente }}<br>*/
/*                 Company name: {{ factura.nombempresa }}<br>*/
/*                 Company address: {{ factura.direcmpresa }}<br>*/
/*                 company phone: {{ factura.telecmpresa }}*/
/*             </p>*/
/*         </div><!--.col-->*/
/* */
/* */
/* */
/* */
/* */
/*     </div><!--.row-->*/
/* */
/*     <div class="row section" style="margin-top:-1rem">*/
/*         <div class="col-1">*/
/*             <table style='width:100%'>*/
/*                 <thead>*/
/*                 <tr class="invoice_detail">*/
/*                     <th width="25%" style="text-align">Seller</th>*/
/* */
/*                     <th width="30%">Terms and Conditions</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <tr class="invoice_detail">*/
/*                     <td width="25%" style="text-align">{{ factura.nombvendedor }}</td>*/
/* */
/*                     <td width="30%">Cash payment</td>*/
/*                 </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* */
/*     </div><!--.row-->*/
/* */
/*     <div class="invoicelist-body">*/
/*         <table>*/
/*             <thead>*/
/*             {% if factura.productoid.nombre=='Pineapple' %}*/
/*                 <th width="5%">Size</th>*/
/*             {% else %}*/
/*                 <th width="5%">Quality</th>*/
/*             {% endif %}*/
/* */
/*             <th width="60%">Product</th>*/
/*             {% if factura.productoid.nombre=='Pineapple' %}*/
/*                 <th width="10%">Pallet</th>*/
/*             {% endif %}*/
/* */
/*             <th width="10%">Boxes</th>*/
/* */
/* */
/*             <th width="15%">Price</th>*/
/*             <th class="taxrelated">Tax/unit</th>*/
/*             <th width="10%">Total</th>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% set totalpallet ='0' %}*/
/*             {% set impuestotal ='0' %}*/
/*             {% set sumatotal ='0' %}*/
/*             {% set sumacajas ='0' %}*/
/*             {% for producto in productos %}*/
/*                 <tr>*/
/*                     <td width='5%'><span>{{ producto.producto.nombre }}</span></td>*/
/*                     <td width='60%'><span>{{ factura.productoid }}</span></td>*/
/*                     {% if factura.productoid.nombre=='Pineapple' %}*/
/*                         <td class="amount"><span>{{ producto.cantidad }}</span></td>*/
/*                         {% set totalcajas =producto.cantidad * 80 %}*/
/*                     {% else %}*/
/*                         {% set totalcajas =producto.cantidad %}*/
/*                     {% endif %}*/
/* */
/* */
/*                     {% set totalpallet =totalpallet + producto.cantidad %}*/
/*                     {% if factura.productoid.nombre=='Pineapple' %}*/
/*                         {% set sumacajas =producto.cantidad  * 80 + sumacajas%}*/
/*                     {% else %}*/
/*                         {% set sumacajas =producto.cantidad + sumacajas%}*/
/*                     {% endif %}*/
/* */
/*                     {% if factura.productoid.nombre=='Pineapple' %}*/
/*                         <td width='5%'><span>{{ totalcajas }}</span></td>*/
/*                         {% else %}*/
/*                             <td width='5%'><span>{{  producto.cantidad }}</span></td>*/
/*                     {% endif %}*/
/* */
/* */
/* */
/*                     {% if factura.moneda=='Dolar' %}*/
/*                         <td class="rate"><span>${{ producto.producto.precio|number_format(2, '.', '') }}</span></td>*/
/*                     {% else %}*/
/*                         <td class="rate"><span>€{{ producto.producto.precio|number_format(2, '.', '') }}</span></td>*/
/*                     {% endif %}*/
/* */
/* */
/*                     {% set total =producto.producto.precio * totalcajas + producto.producto.impuesto *totalcajas %}*/
/*                     {% if factura.moneda=='Dolar' %}*/
/*                         <td class="tax taxrelated">${{ producto.producto.impuesto|number_format(2, '.', '') }}</td>*/
/*                         <td class="sum">${{ total }}</td>*/
/*                     {% else %}*/
/*                         <td class="tax taxrelated">€{{ producto.producto.impuesto|number_format(2, '.', '') }}</td>*/
/*                         <td class="sum">€{{ total|number_format(2, '.', '') }}</td>*/
/*                     {% endif %}*/
/* */
/*                     {% set impuestotal =impuestotal + producto.producto.impuesto * totalcajas %}*/
/*                     {% set sumatotal = sumatotal + producto.producto.precio * totalcajas + producto.producto.impuesto * totalcajas %}*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             <tr>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 {% if factura.productoid.nombre=='Pineapple' %}*/
/*                     <td>*/
/*                         <strong>{{ totalpallet }}</strong>*/
/* */
/*                     </td>*/
/* */
/*                 {% endif %}*/
/* */
/*                 <td>*/
/*                     <strong>{{ sumacajas }}</strong>*/
/*                 </td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/* */
/* */
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/* */
/*     </div><!--.invoice-body-->*/
/* */
/*     <div class="invoicelist-footer">*/
/*         <table>*/
/*             {% if factura.moneda=='Dolar' %}*/
/* */
/*                 <tr class="taxrelated">*/
/*                     <td>Tax:</td>*/
/* */
/*                     <td id="total_tax">${{ impuestotal|number_format(2, '.', '') }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><strong>Total:</strong></td>*/
/*                     <td id="total_price">${{ sumatotal|number_format(2, '.', '') }}</td>*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <tr class="taxrelated">*/
/*                     <td>Tax:</td>*/
/* */
/*                     <td id="total_tax">€{{ impuestotal|number_format(2, '.', '') }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><strong>Total:</strong></td>*/
/*                     <td id="total_price">€{{ sumatotal|number_format(2, '.', '') }}</td>*/
/*                 </tr>*/
/* */
/* */
/*             {% endif %}*/
/* */
/*         </table>*/
/*     </div>*/
/* */
/*     <div class="note">*/
/*         <h2>Note: {{ factura.nota }}</h2>*/
/*     </div><!--.note-->*/
/* */
/*     <footer class="row">*/
/* */
/*     </footer>*/
/* */
/*     </body>*/
/*     </html>*/
/* {% else %}*/
/*     <!DOCTYPE html>*/
/*     <html lang="en">*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>Crear facturas</title>*/
/*         <link rel="stylesheet" href="{{ asset('css/reporte.css') }}">*/
/*     </head>*/
/*     <body>*/
/*     <div class="control-bar">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-2-4">*/
/*                     <div class="slogan">Facturación </div>*/
/* */
/* */
/* */
/*                 </div>*/
/*                 <div class="col-4 text-right">*/
/*                     <a href="{{ path('factura_index') }}">Atras</a>*/
/*                     <a href="javascript:window.print()">Imprimir</a>*/
/*                 </div><!--.col-->*/
/*             </div><!--.row-->*/
/*         </div><!--.container-->*/
/*     </div><!--.control-bar-->*/
/* */
/*     <header class="row">*/
/*         <div class="logoholder text-center" >*/
/*             <img src="{{ asset('img/logo2.png') }}">*/
/*         </div><!--.logoholder-->*/
/* */
/*         <div class="me">*/
/*             <p>*/
/*                 <strong>Rady Fresh Fruit LLC</strong><br>*/
/*                 {{ dato.direccion }}<br>*/
/* */
/*             </p>*/
/*         </div><!--.me-->*/
/* */
/*         <div class="info">*/
/*             <p>*/
/*                 Web: <a href="http://www.radyfreshfruit.com"> {{ dato.web }}</a><br>*/
/*                 E-mail: <a href="mailto:salescucho@gmail.com">{{ dato.email }}</a><br>*/
/*                 Tel: {{ dato.telefono }}<br>*/
/*             </p>*/
/*         </div><!-- .info -->*/
/* */
/*         <div class="bank">*/
/*             <p>*/
/*                 Datos bacarios: <br>*/
/*                 Titular de la cuenta: <br>*/
/*                 IBAN: <br>*/
/*                 BIC:*/
/*             </p>*/
/*         </div><!--.bank-->*/
/* */
/*     </header>*/
/* */
/* */
/*     <div class="row section">*/
/* */
/*         <div class="col-2">*/
/*             <h1>Factura</h1>*/
/*         </div><!--.col-->*/
/* */
/*         <div class="col-2 text-right details">*/
/*             <p>*/
/*                 Fecha: {{ factura.fecha|date('d/m/Y') }}<br>*/
/*                 Factura #: {{ factura.id }}<br>*/
/* */
/*             </p>*/
/*         </div><!--.col-->*/
/* */
/* */
/* */
/*         <div class="col-2">*/
/* */
/* */
/*             <p class="client">*/
/*                 <strong>Enviar a:</strong><br>*/
/*                 Nombre cliente: {{ factura.nombcliente }}<br>*/
/*                 Nombre emmpresa: {{ factura.nombempresa }}<br>*/
/*                 Dirección empresa: {{ factura.direcmpresa }}<br>*/
/*                 Tel empresa: {{ factura.telecmpresa }}*/
/*             </p>*/
/*         </div><!--.col-->*/
/* */
/* */
/* */
/* */
/* */
/*     </div><!--.row-->*/
/* */
/*     <div class="row section" style="margin-top:-1rem">*/
/*         <div class="col-1">*/
/*             <table style='width:100%'>*/
/*                 <thead>*/
/*                 <tr class="invoice_detail">*/
/*                     <th width="25%" style="text-align">Vendedor</th>*/
/* */
/*                     <th width="30%">Términos y condiciones</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <tr class="invoice_detail">*/
/*                     <td width="25%" style="text-align">{{ factura.nombvendedor }}</td>*/
/* */
/*                     <td width="30%">Pago al contado</td>*/
/*                 </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* */
/*     </div><!--.row-->*/
/* */
/*     <div class="invoicelist-body">*/
/*         <table>*/
/*             <thead>*/
/*             {% if factura.productoid.nombre=='Pineapple' %}*/
/*                 <th width="5%">Size</th>*/
/*             {% else %}*/
/*                 <th width="5%">Calidad</th>*/
/*             {% endif %}*/
/*             <th width="60%">Producto</th>*/
/*              {% if factura.productoid.nombre=='Pineapple' %}*/
/*                 <th width="10%">Pallet</th>*/
/*             {% endif %}*/
/*           */
/*             <th width="30%">Cajas</th>*/
/* */
/* */
/* */
/*             <th width="100%">Precio/caja</th>*/
/*             <th class="taxrelated">Impuesto/caja</th>*/
/*             <th width="10%">Total</th>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% set totalpallet ='0' %}*/
/*             {% set impuestotal ='0' %}*/
/*             {% set sumatotal ='0' %}*/
/*             {% set sumacajas ='0' %}*/
/*             {% for producto in productos %}*/
/*                 <tr>*/
/*                     <td width='5%'><span>{{ producto.producto.nombre }}</span></td>*/
/*                     <td width='60%'><span>{{ factura.productoid }}</span></td>*/
/*                     {% if factura.productoid.nombre=='Pineapple' %}*/
/*                         <td class="amount"><span>{{ producto.cantidad }}</span></td>*/
/*                         {% set totalcajas =producto.cantidad * 80 %}*/
/*                     {% else %}*/
/*                         {% set totalcajas =producto.cantidad %}*/
/*                     {% endif %}*/
/* */
/* */
/*                     {% set totalpallet =totalpallet + producto.cantidad %}*/
/*                     {% if factura.productoid.nombre=='Pineapple' %}*/
/*                         {% set sumacajas =producto.cantidad  * 80 + sumacajas%}*/
/*                     {% else %}*/
/*                         {% set sumacajas =producto.cantidad + sumacajas%}*/
/*                     {% endif %}*/
/* */
/*                     {% if factura.productoid.nombre=='Pineapple' %}*/
/*                         <td width='5%'><span>{{ totalcajas }}</span></td>*/
/*                     {% else %}*/
/*                         <td width='5%'><span>{{  producto.cantidad }}</span></td>*/
/*                     {% endif %}*/
/* */
/* */
/* */
/*                     {% if factura.moneda=='Dolar' %}*/
/*                         <td class="rate"><span>${{ producto.producto.precio|number_format(2, '.', '') }}</span></td>*/
/*                     {% else %}*/
/*                         <td class="rate"><span>€{{ producto.producto.precio|number_format(2, '.', '') }}</span></td>*/
/*                     {% endif %}*/
/* */
/* */
/*                     {% set total =producto.producto.precio * totalcajas + producto.producto.impuesto *totalcajas %}*/
/*                     {% if factura.moneda=='Dolar' %}*/
/*                         <td class="tax taxrelated">${{ producto.producto.impuesto|number_format(2, '.', '') }}</td>*/
/*                         <td class="sum">${{ total }}</td>*/
/*                     {% else %}*/
/*                         <td class="tax taxrelated">€{{ producto.producto.impuesto|number_format(2, '.', '') }}</td>*/
/*                         <td class="sum">€{{ total|number_format(2, '.', '') }}</td>*/
/*                     {% endif %}*/
/* */
/*                     {% set impuestotal =impuestotal + producto.producto.impuesto * totalcajas %}*/
/*                     {% set sumatotal = sumatotal + producto.producto.precio * totalcajas + producto.producto.impuesto * totalcajas %}*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             <tr>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                  {% if factura.productoid.nombre=='Pineapple' %}*/
/*                 <strong>{{ totalpallet }}</strong>*/
/*                 {% endif %} */
/*                */
/*                 <td>*/
/*                     <strong>{{ sumacajas }}</strong>*/
/*                 </td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/* */
/* */
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/* */
/*     </div><!--.invoice-body-->*/
/* */
/*     <div class="invoicelist-footer">*/
/*         <table>*/
/*             {% if factura.moneda=='Dolar' %}*/
/* */
/*                 <tr class="taxrelated">*/
/*                     <td>Impuesto:</td>*/
/* */
/*                     <td id="total_tax">${{ impuestotal|number_format(2, '.', '') }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><strong>Total:</strong></td>*/
/*                     <td id="total_price">${{ sumatotal|number_format(2, '.', '') }}</td>*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <tr class="taxrelated">*/
/*                     <td>Impuesto:</td>*/
/* */
/*                     <td id="total_tax">€{{ impuestotal|number_format(2, '.', '') }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><strong>Total:</strong></td>*/
/*                     <td id="total_price">€{{ sumatotal|number_format(2, '.', '') }}</td>*/
/*                 </tr>*/
/* */
/* */
/*             {% endif %}*/
/* */
/*         </table>*/
/*     </div>*/
/* */
/*     <div class="note">*/
/*         <h2>Nota: {{ factura.nota }}</h2>*/
/*     </div><!--.note-->*/
/* */
/*     <footer class="row">*/
/* */
/*     </footer>*/
/* */
/*     </body>*/
/*     </html>*/
/* {% endif %}*/
/* */
