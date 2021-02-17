<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="shortcut icon" href="{{ asset('components/logo.svg') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Panarcadias homepage</title>
</head>

<body class="font-ssp m-0">
    <header class="bg-header-img-small md:bg-header-img h-475 lg:h-750 bg-no-repeat bg-cover bg-bottom">
        <div class="container">
            <!--Topbar-->
            <button type="button" onclick="showNav(0)" class="lg:hidden mr-10 mt-10 float-right"><i
                    class="bg-burger-icon block w-6 h-6"></i></button>
            <div
                class="lg:top-0 w-full pr-20 lg:pr-0 box-border h-70 pt-15 pb-10 lg:pl-250 flex justify-between text-white font-bold">
                <ul
                    class="w-full flex justify-between lg:w-210 lg:block text-10 lg:text-xs text-right tracking-wide lg:tracking-widest">
                    <li class="inline-block w-60 lg:w-85">ΑΡΚΑΔΙΑ
                        <span class="lg:font-pn font-normal text-lg lg:text-26 tracking-base leading-none">13:28
                        </span><i
                            class="bg-clock-icon bg-cover block w-15 h-15 lg:w-20 lg:h-20 float-left relative top-px"></i>
                    </li>
                    <li class="inline-block lg:ml-20 w-70 lg:w-100">ΚΑΤΑΙΓΙΔΑ
                        <span class="lg:font-pn font-normal text-lg lg:text-26 tracking-base leading-none">12°C<span
                                class="ml-0.5 opacity-40">°F</span></span>
                        <i
                            class="bg-weather-icon bg-cover block w-15 h-15 lg:w-20 lg:h-20 float-left relative top-px"></i>
                    </li>
                </ul>
                <ul class="hidden mr-40 lg:flex text-sm">
                    <li class="mr-40 flex items-center">
                        <i class="bg-user-icon bg-contain inline-block w-15 h-15 lg:w-20 lg:h-20 w-6 h-6"></i><a
                            href="#" class="ml-1.5">Εγγραφή/Σύνδεση</a>
                    </li>
                    <li class="flex items-center">
                        <i class="mr-1 bg-flag-icon inline-block w-28 h-20"></i>
                        <i class="bg-dropdown-icon inline-block w-3.5 h-3.5 cursor-pointer"></i>
                    </li>
                </ul>
            </div>
            <a href="/homepage.html"><img class="lg:hidden absolute top-10 left-1/2 transform -translate-x-1/2"
                    src="components/Logo-small.svg" alt="logo" /></a>
            <!--Main Nav small screen-->
            <nav
                class="hidden lg:hidden position absolute top-0 right-0 w-300 h-auto bg-white rounded-b text-sm font-bold text-blue z-10">
                <div class="h-50 p-10 bg-smoke flex justify-between items-center">
                    <button type="button" onclick="hideNav(0)"><i
                            class="bg-close-icon block w-6 h-6 cursor-pointer "></i></button>
                    <span>
                        <i class="bg-flag-icon inline-block w-28 h-20 relative top-1"></i>
                        <i class="bg-dropdown-blue-icon inline-block w-3.5 h-3.5 cursor-pointer"></i>
                    </span>
                </div>
                <div class="h-40 flex justify-center items-center">
                    <i class="bg-user-blue-icon bg-contain inline-block w-15 h-15 lg:w-20 lg:h-20 w-6 h-6"></i><a
                        href="#" class="ml-1.5">Εγγραφή/Σύνδεση</a>
                </div>
                <div class="mb-20 w-full border-t-2 border-fade"></div>
                <ul class="pl-20 pr-10">
                    <li class="mb-20">
                        <a class="cursor-pointer" onclick="showNav(1)">Η ΟΜΟΣΠΟΝΔΙΑ</a>
                        <nav class="hidden position absolute top-0 right-0 w-300 h-auto bg-white rounded-b z-20">
                            <button type="button" onclick="hideNav(1)"
                                class="mt-15 ml-20 flex items-center border-none bg-none text-sm hover:text-red">
                                <i class="bg-leftarrow-icon inline-block w-6 h-6"></i>Επιστροφή</button>
                            <ul class=" p-30">
                                <li><a href="" class="block mb-10">Ιστορία</a></li>
                                <li><a href="" class="block mb-10">Διοικητικό Συμβούλιο</a></li>
                                <li><a href="" class="block mb-10">Πρόεδρος - Βιογραφικό Σημείωμα</a></li>
                                <li><a href="" class="block mb-10">Μήνυμα Προέδρου</a></li>
                                <li><a href="" class="block mb-10">Districts</a></li>
                                <li><a href="" class="block mb-10">Διατελεσαντες Προέδροι</a></li>
                                <li><a href="" class="block mb-10">Αποστολή - Αξίες</a></li>
                                <li><a href="" class="block mb-10">Πορεία - Εξέλιξη</a></li>
                                <li><a href="" class="block mb-10">Ο Έλληνας πρέσβης στην Ουάσιγκτον</a></li>
                                <li><a href="" class="block mb-10">Ο Πρέσβης ΗΠΑ στην Αθήνα</a></li>
                                <li><a href="" class="block mb-10">Ο Οικουμενικός Πατριάρχης</a></li>
                                <li><a href="" class="block mb-10">Ο Αρχιεπίσκοπος Αμερικής</a></li>
                            </ul>
                        </nav>
                    </li>
                    <li class="flex items-center mb-20"><a href="">ΑΡΚΑΔΩΝ ΕΡΓΑ</a></li>
                    <li class="flex items-center mb-20"><a href="">ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</a></li>
                    <li class="flex items-center mb-20"><a href="">ΝΕΑ-ΕΝΗΜΕΡΩΣΗ</a></li>
                    <li class="flex items-center mb-20"><a href="">ΕΠΙΣΚΕΨΗ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
                    <li class="flex items-center mb-20"><a href="">ΑΝΑΖΗΤΗΣΕΙΣ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
            </nav>
            <!--Main Nav large screen-->
            <nav class="hidden lg:block relative box-border h-60 rounded" style="background: radial-gradient(
        circle at 150px 30px,
        transparent 99px,
        #ffffff 100px
      );">
                <a href="/homepage" class="block absolute left-60 -top-full"><img src="components/logo.svg"
                        alt="logo" /></a>
                <ul class="m-0 flex h-full pl-250 justify-evenly text-sm font-bold text-blue">
                    <div class="group flex items-center h-70 pb-10">
                        <li>
                            Η ΟΜΟΣΠΟΝΔΙΑ
                            <div
                                class="hidden group-hover:block pt-15 pr-10 pb-20 pl-20 -ml-10 z-10 min-w-240 min-h-320 bg-white rounded shadow-2xl absolute top-70">
                                <a href="" class="block mb-10">Ιστορία</a>
                                <a href="" class="block mb-10">Διοικητικό Συμβούλιο</a>
                                <a href="" class="block mb-10">Πρόεδρος - Βιογραφικό Σημείωμα</a>
                                <a href="" class="block mb-10">Μήνυμα Προέδρου</a>
                                <a href="" class="block mb-10">Districts</a>
                                <a href="" class="block mb-10">Διατελεσαντες Προέδροι</a>
                                <a href="" class="block mb-10">Αποστολή - Αξίες</a>
                                <a href="" class="block mb-10">Πορεία - Εξέλιξη</a>
                                <a href="" class="block mb-10">Ο Έλληνας πρέσβης στην Ουάσιγκτον</a>
                                <a href="" class="block mb-10">Ο Πρέσβης ΗΠΑ στην Αθήνα</a>
                                <a href="" class="block mb-10">Ο Οικουμενικός Πατριάρχης</a>
                                <a href="" class="block mb-10">Ο Αρχιεπίσκοπος Αμερικής</a>
                            </div>
                    </div>
                    </li>
                    <li class="flex items-center">ΑΡΚΑΔΩΝ ΕΡΓΑ</li>
                    <li class="flex items-center">ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</li>
                    <li class="flex items-center">ΝΕΑ-ΕΝΗΜΕΡΩΣΗ</li>
                    <li class="flex items-center">ΕΠΙΣΚΕΨΗ ΣΤΗΝ ΑΡΚΑΔΙΑ</li>
                    <li class="flex items-center">ΑΝΑΖΗΤΗΣΕΙΣ ΣΤΗΝ ΑΡΚΑΔΙΑ</li>
                    <li class="flex items-center">
                        <a href=""><span class="bg-mail-icon inline-block w-6 h-6 relative top-1"></span></a>
                    </li>
                </ul>
            </nav>
            <img class="hidden lg:block relative top-20 left-250" src="components/title.svg" alt="title-img" />
            <img class="lg:hidden relative top-20 left-1/2 transform -translate-x-1/2" src="components/title.svg"
                alt="title-img" />
            <!--Featured-->
            <div
                class="box-border w-280 h-280 lg:w-450 lg:h-450 mx-auto mt-40 lg:my-80 p-1 lg:p-40 border-6 rounded-full border-white bg-circle-img lg:bg-circle-img bg-cover shadow-2xl text-white text-center">
                <i class="bg-greek-icon inline-block w-18 h-18 bg-cover lg:w-6 lg:h-6"></i>
                <h3 class="mt-1 mb-15 lg:mt-10 lg:mb-30 text-xs lg:text-sm font-bold tracking-widest">ΚΑΛΩΣ ΗΛΘΑΤΕ</h3>
                <h2 class="mb-15 lg:mb-30 text-lg lg:text-2xl font-bold">Η αποστολή μας</h2>
                <p class="hidden lg:block mb-30 text-base">
                    Ο Παναρκαδικής Ομοσπονδίας Αμερικής είναι μια
                    πανεθνική μη κερδοσκοπικού αδελφό<br />
                    ελληνικό-αμερικανική οργάνωση τα μέλη της οποίας κατεβαίνουν από την
                    περιοχή της Αρκαδίας στην Πελοπόννησο, στη νότια Ελλάδα …
                </p>
                <p class="lg:hidden text-sm mb-15 px-20">
                    Ο Παναρκαδικής Ομοσπονδίας Αμερικής είναι μια
                    πανεθνική μη κερδοσκοπικού αδελφό<br />
                    ελληνικό-αμερικανική οργάνωση...
                </p>
                <button type="button" class="transparent-button" onclick="">
                    ΠΕΡΙΣΣΟΤΕΡΑ
                </button>
            </div>
        </div>
    </header>
    <!--APOGRAFH-->
    <div class="lg:bg-stars-img bg-no-repeat bg-cover">
        <div class="container py-30 lg:py-40 lg:px-180 text-center">
            <img src="components/icons/colored.svg" class="block m-auto" alt="tree-colored" />
            <img src="components/With Greek Roots.svg" class="block mt-10 mb-30 lg:mt-20 lg:mb-40 mx-auto"
                alt="with-greek-roots" />
            <p class="mb-15 lg:mb-40 text-5xl font-bold text-red">Μετριόμαστε, γιατί μετράμε!</p>
            <div class="mb-30 lg:w-460 h-auto lg:float-left overflow-hidden text-center lg:text-left">
                <p class="small-title mb-20 text-blue">
                    Γενική απογραφή των αποδήμων Αρκάδων στις ΗΠΑ και επαναπατρισθέντων
                    από τις ΗΠΑ
                </p>
                <p class="text-base lg:mb-10">
                    Η Παναρκαδική Ομοσπονδία Αμερικής πραγματοποιεί απογραφή <br />των
                    Αρκάδων που διαμένουν και εργάζονται στις ΗΠΑ, (ανεξαρτήτως
                    υπηκότητας).
                </p>
                <p class="text-base mb-10 lg:mb-15">
                    <b>Το αποτύπωμα της Αρκαδικής γης μας συνδέει!</b>
                </p>
                <p class="text-base m-0">
                    Όση χιλιομετρική απόσταση και αν μας χωρίζει, όσες γενιές και να
                    έχουμε...ψηλώσει πέρα απο τις ρίζες μας, η Αρκαδία, μας ενώνει!
                </p>
            </div>
            <div class="hidden lg:block mb-40 ml-60 w-475 h-auto float-left overflow-hidden text-left">
                <p class="small-title mb-40 text-blue">
                    Απογραφόμαστε...
                </p>
                <p class="text-base mb-10">
                    <i class="arrow-icon"></i>Για να γνωρίσουμε ο ένας τον άλλο.
                </p>
                <p class="text-base mb-1">
                    <i class="arrow-icon"></i>Για να αντλήσουμε δύναμη απο τις ρίζες μας
                    και την καταγωγή μας.
                </p>
                <p class="text-base m-0">
                    <i class="arrow-icon"></i>Για να είμαστε χρήσιμοι και να
                    παρεμβαίνουμε δημιουργικά για τις
                    <span class="ml-15">ΗΠΑ την Ελλάδα και την Αρκαδία.</span>
                </p>
                <p class="text-base mb-10">
                    <i class="arrow-icon"></i>Για να υλοποιήσουμε τα σχέδια και τα
                    οραματά μας.
                </p>
                <p class="text-base m-0">
                    <i class="arrow-icon"></i>Για να είμαστε ισχυροί.
                </p>
            </div>
            <p class="font-bold text-lg text-red">
                ΤΕΛΕΤΗ ΕΝΑΡΞΗΣ
            </p>
            <p>
            <h1 class="mt-1 mb-10 text-2xl lg:text-4xl font-bold text-blue ">Παρασκευή 20 Απριλίου 2108</h1>
            </p>
            <p class="small-title mb-20 text-blue">ΝΕΑ ΥΟΡΚΗ</p>
        </div>
    </div>
    <!--Projects-->
    <div class="pt-40 h-650 text-white text-center bg-blue overflow-hidden">
        <i class="bg-greek-icon inline-block  w-6 h-6"></i>
        <h3 class="mt-10 m-b30 text-xs font-bold tracking-widest">ΕΡΓΑ & ΔΡΑΣΤΗΡΙΟΤΗΤΕΣ</h3>
        <div class="w-1360 my-30 mx-auto flex justify-evenly">
            <div class="w-300 text-left">
                <img src="components/photos/photo1.png" class="mb-20" alt="photo1" />
                <h2 class="text-2xl font-bold">Γενικού Παναρκαδικό Νοσοκομείο Τρίπολης</h2>
                <p class="mt-10 mb-20 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolor.</p>
                <a href="#" class="text-sm font-bold"><i class="red-line-icon"></i>ΠΕΡΙΣΣΟΤΕΡΑ</a>
            </div>
            <div class="w-300 text-left">
                <img src="components/photos/photo2.png" class="mb-20" alt="photo2" />
                <h2 class="text-2xl font-bold">Ο παραδοσιακός οικισμός του Λεωνιδίου</h2>
                <p class=" mt-10 mb-20 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolor.</p>
                <a href="#" class="text-sm font-bold"><i class="red-line-icon"></i>ΠΕΡΙΣΣΟΤΕΡΑ</a>
            </div>
            <div class="w-300 text-left">
                <img src="components/photos/photo3.png" class="mb-20" alt="photo3" />
                <h2 class="text-2xl font-bold">Κυνουρία, Εκεί που δεσπόζει ο Πάρνωνας</h2>
                <p class="mt-10 mb-20 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolor.</p>
                <a href="#" class="text-sm font-bold"><i class="red-line-icon"></i>ΠΕΡΙΣΣΟΤΕΡΑ</a>
            </div>
            <div class="w-300 text-left">
                <img src="components/photos/photo4.png" class="mb-20" alt="photo4" />
                <h2 class="text-2xl font-bold">Οι ελληνικές πόλεις με τα καλύτερα πάρκα!</h2>
                <p class="mt-10 mb-20 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolor.</p>
                <a href="#" class="text-sm font-bold"><i class="red-line-icon"></i>ΠΕΡΙΣΣΟΤΕΡΑ</a>
            </div>
        </div>
        <button type="button" class="transparent-button">ΠΕΡΙΣΣΟΤΕΡΑ</button>
    </div>
    <!--form-->
    <div class="container pt-30 lg:pt-60 h-660 text-center">
        <p class="mb-30 lg:m-0 text-sm lg:text-xs font-bold text-blue tracking-widest">ΕΠΙΚΟΙΝΩΝΙΑ</p>
        <form id="contactUs-form" class="w-280 lg:w-620 h-380 my-0 mx-auto text-left">
            @csrf
            <div class="hidden lg:block mt-20 mb-4 w-750 border-t-2 border-fade relative -left-70"></div>
            <label for="name" class="text-xs tracking-tight">Ονοματεπώνυμο</label>
            <span id="name-err" class="text-red text-xs ml-10"></span>
            <input type="text" name="name" class="input" />
            <label for="phone" class="text-xs tracking-tight">Τηλέφωνο</label>
            <span id="phone-err" class="text-red text-xs ml-10"></span>
            <i id="phone-icon" class="bg-phone-icon block w-16 h-16 absolute mt-19 ml-10"></i>
            <input type="text" name="phone" class="input" onfocus="hideIcon(1)" onblur="placeIcon(1)" />
            <label for="email" class="text-xs tracking-tight">Email</label>
            <span id="email-err" class="text-red text-xs ml-10"></span>
            <i id="form-email-icon" class="bg-form-email-icon block w-16 h-16 absolute mt-19 ml-10"></i>
            <input type="text" name="email" class="input" onfocus="hideIcon(2)" onblur="placeIcon(2)" />
            <label for="body" class=" text-xs tracking-tight">Μήνυμα</label>
            <span id="body-err" class="text-red text-xs ml-10"></span>
            <textarea name="body"
                class="mt-1 mb-6 pl-1 w-full h-110 border-1 rounded border-grey resize-none">{{ old('body') }}</textarea>
            <div class="mb-20 w-full lg:w-750 border-t-2 border-fade relative lg:-left-70"></div>
            <button type="submit" value="Submit"
                class="w-130 lg:w-240 h-50 float-right border-none rounded bg-blue text-sm text-white font-bold relative flex justify-center items-center hover:bg-red">
                ΑΠΟΣΤΟΛΗ
                <i class="bg-buttonarrow-icon block w-6 h-6 absolute left-100 lg:left-200"></i></button>
        </form>
    </div>
    <!--footer-->
    <footer class="bg-blue lg:h-420 text-white relative">
        <button
            class="hidden lg:block m-0 p-0 w-44 h-44 border-none bg-none float-right relative -top-20 right-24 duration-300 transform hover:-translate-y-1"
            onclick="window.scrollTo({top: 0, behavior: 'smooth'});" title="Go to top">
            <i class="bg-backtotop-icon block w-full h-full"></i>
        </button>
        <div class="container pt-10 lg:px-80 text-center">
            <img src="components/logo.svg" class="my-20 mx-auto w-140 h-140 lg:w-180 lg:h-180" alt="panarcadia_logo" />
            <img src="components/title.svg" class="my-20 mx-auto" alt="title-img" />
            <div class="w-320 lg:w-380 h-40 my-0 mx-auto flex justify-evenly">
                <a href="https://www.facebook.com" target="blank"><i class="bg-facebook-icon block w-40 h-40"></i></a>
                <a href="https://www.twitter.com" target="blank"><i class="bg-twitter-icon block w-40 h-40"></i></a>
                <a href="https://www.linkedin.com" target="blank"><i class="bg-linkedin-icon block w-40 h-40"></i></a>
                <a href="https://www.instagram.com" target="blank"><i class="bg-instagram-icon block w-40 h-40"></i></a>
                <a href="https://www.youtube.com" target="blank"><i class="bg-youtube-icon block w-40 h-40"></i></a>
            </div>
            <nav class="mt-30 mb-20">
                <ul class="p-0 lg:flex justify-evenly text-sm font-bold">
                    <li class="mb-20 lg:m-0"><a href="">Η ΟΜΟΣΠΟΝΔΙΑ</a></li>
                    <li class="mb-20 lg:m-0"><a href="">ΑΡΚΑΔΩΝ ΕΡΓΑ</a></li>
                    <li class="mb-20 lg:m-0"><a href="">ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</a></li>
                    <li class="mb-20 lg:m-0"><a href="">ΝΕΑ - ΕΝΗΜΕΡΩΣΗ</a></li>
                    <li class="mb-20 lg:m-0"><a href="">ΕΠΙΣΚΕΨΗ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
                    <li class="mb-20 lg:m-0"><a href="">ΑΝΑΖΗΤΗΣΕΙΣ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
                    <li class="mb-20 lg:m-0"><a href="">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
                </ul>
            </nav>
            <p class=" m-0 text-sm opacity-50">©2018 Pan Arcadian Federation of America</p>
        </div>
        <button
            class="lg:hidden m-0 p-0 w-44 h-44 border-none bg-none float-right absolute bottom-30 right-10 duration-300 transform hover:-translate-y-1"
            onclick="window.scrollTo({top: 0, behavior: 'smooth'});" title="Go to top">
            <i class="bg-backtotop-icon block w-full h-full"></i>
        </button>
    </footer>

    <script type="text/javascript">
        function showNav(x) {
            document.getElementsByTagName("nav")[x].classList.remove("hidden");
        }

        function hideNav(x) {
            document.getElementsByTagName("nav")[x].classList.add("hidden");
        }

        function hideIcon(x) {
            if (x == 1)
                document.querySelector("#contactUs-form #phone-icon").style.display = "none";
            else
                document.querySelector("#contactUs-form #form-email-icon").style.display = "none";
        }

        function placeIcon(x) {
            if (x == 1 && document.getElementsByName("phone")[0].value == "") {
                document.querySelector("#contactUs-form #phone-icon").style.display = "block";
            } else if (document.getElementsByName("email")[0].value == "")
                document.querySelector("#contactUs-form #form-email-icon").style.display = "block";
        }
        $(document).ready(function() {
            $("#contactUs-form button").click(function(e) {
                e.preventDefault();
                $("#contactUs-form span").text("");
                let _token = $("input[name='_token']").val();
                let name = $("input[name='name']").val();
                let phone = $("input[name='phone']").val();
                let email = $("input[name='email']").val();
                let body = $("textarea[name='body']").val();

                $.ajax({
                    url: "{{ route('messages') }}",
                    type: "POST",
                    data: {
                        _token: _token,
                        name: name,
                        phone: phone,
                        email: email,
                        body: body
                    },
                    success: function(data) {
                        $("#contactUs-form input").val("");
                        $("#contactUs-form textarea").val("");
                        alert("Messsage sent!");
                    },
                    error: function(error) {
                        console.debug(error);
                        let response = JSON.parse(error.responseText);
                        if (response.message === "CSRF token mismatch.") {
                            alert("Attempt failed: Token mismatch");
                        } else {
                            $("#contactUs-form #name-err").text(response.errors.name);
                            $("#contactUs-form #phone-err").text(response.errors.phone);
                            $("#contactUs-form #email-err").text(response.errors.email);
                            $("#contactUs-form #body-err").text(response.errors.body);
                        }
                    }
                });
            });
        });

    </script>

</body>

</html>
