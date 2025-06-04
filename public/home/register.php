<?php include 'header.php'; ?>
<?php

include 'includes/db.php';


$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username    = $_POST['username'];
    $password    = $_POST['password'];
    $password2   = $_POST['password2'];
    $name        = $_POST['name'];
    $email       = $_POST['email'];
    $personalid  = $_POST['personalid'];

    if ($password !== $password2) {
        $mensagem = "As senhas não coincidem.";
    } else {
        // NÃO faz hash, salva a senha como texto puro
        $plainPassword = $password;

        // Campos adicionais
        $ShowBanner = 0;
        $WarehouseCount = 0;
        $OnlineRewardTime1 = 0;
        $OnlineRewardTime2 = 0;
        $OnlineRewardTime3 = 0;
        $Lock = 0;
        $AccountExpireDate = date('Ymd'); // formato padrão do MuOnline
        $AccountLevel = 0;
        $ctl1_code = 1;
        $bloc_code = 0;

        $query = "INSERT INTO MEMB_INFO 
            (memb___id, memb__pwd, memb_name, mail_addr, sno__numb, ShowBanner, WarehouseCount, OnlineRewardTime1, OnlineRewardTime2, OnlineRewardTime3, [Lock], AccountExpireDate, AccountLevel, ctl1_code, bloc_code)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $params = [
            $username, $plainPassword, $name, $email, $personalid,
            $ShowBanner, $WarehouseCount, $OnlineRewardTime1, $OnlineRewardTime2, $OnlineRewardTime3,
            $Lock, $AccountExpireDate, $AccountLevel, $ctl1_code, $bloc_code
        ];
        $stmt = sqlsrv_query($conn, $query, $params);

        if ($stmt) {
            $mensagem = "Conta criada com sucesso!";
        } else {
            $errors = sqlsrv_errors();
            $mensagem = "Erro ao criar conta.";
            if ($errors) {
                foreach ($errors as $error) {
                    $mensagem .= "<br>SQLSTATE: " . $error['SQLSTATE'] . " - " . $error['message'];
                }
            }
        }
    }
}
?>

<?php if (!empty($mensagem)): ?>
    <p><?php echo $mensagem; ?></p>
<?php endif; ?>

<form method="POST">
    <input type="text" name="username" placeholder="Usuário" maxlength="10" required>
    <input type="password" name="password" placeholder="Senha" maxlength="12" required>
    <input type="password" name="password2" placeholder="Repita a senha" maxlength="12" required>
    <input type="text" name="name" placeholder="Nome completo" maxlength="10" required>
    <input type="email" name="email" placeholder="E-mail" maxlength="50" required>
    <input type="text" name="personalid" placeholder="Personal ID" maxlength="13" required>
    <button type="submit">Registrar</button>
</form>
<?php include 'footer.php'; ?>