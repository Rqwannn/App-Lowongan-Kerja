function ToRegister(){
    document.location.href = 'Register.php';
}

function ToLogin(){
    document.location.href = 'Login.php';
}

function showPassword(e){
    if(e.target.classList.contains('fa-eye')){
        let getInput = e.target.parentNode.childNodes[1];
        getInput.setAttribute('type', 'text');

        e.target.style.display = 'none';
        e.target.parentNode.lastChild.previousElementSibling.style.display = 'block';
    } else if (e.target.classList.contains('fa-eye-slash')){
        let getInput = e.target.parentNode.childNodes[1];
        getInput.setAttribute('type', 'password');

        e.target.style.display = 'none';
        e.target.parentNode.lastChild.previousElementSibling.previousElementSibling.style.display = 'block';
    }
}

function addAdmin(){

    const Username = document.getElementById("username");
    const Email = document.getElementById("email");
    const Password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirmPassword");

    if(Username.value.length == 0 || Email.value.length == 0 || Password.value.length == 0 || confirmPassword.value.length == 0){
        alert('Tidak Boleh Ada Field Yang Kosong');
    } else {
        if(Password.value != confirmPassword.value){
            alert('Password Tidak Sama');
        } else {
            $.ajax({
                url : "http://localhost/AppLowonganKerja/App/Api/addAdmin.php",
                type : 'POST',
                dataType : 'JSON',
                data : {
                    Username : Username.value,
                    Password : Password.value,
                    Email : Email.value 
                },
                success : (result) => {
                    if (result == "Selamat Data Anda Telah Di Daftarkan"){
                        alert(`${result}`);
                        document.location.href = "Login.php";
                    } else {
                        alert(`${result}`);
                    }
                },
                error : (e) => {
                    console.log(e);
                }
            });
        }
    }
}

function AuthLogin(){
    const Username = document.getElementById("username");
    const Password = document.getElementById("password");

    if(Username.value.length == 0 || Password.value.length == 0){
        alert('Tidak Boleh Ada Field Yang Kosong');
    } else {
        $.ajax({
            url : "http://localhost/AppLowonganKerja/App/Api/AuthLogin.php",
            type : 'POST',
            dataType : 'JSON',
            data : {
                Username : Username.value,
                Password : Password.value,
            },
            success : (result) => {
                if(result == "Selamat Anda Berhasil Login"){
                    alert(`${result}`);
                    document.location.href = "../Admin/index.php";
                } else {
                    alert(`${result}`);
                }
            },
            error : (e) => {
                console.log(e);
            }
        });
    }
}