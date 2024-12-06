<?php
    $handleConfig = fopen("./app.secret", "r") or die("Impossible de recuperer les parametres API");
    $githubToken = str_replace("\n", "", fread($handleConfig, filesize("./app.secret")));

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.github.com/repos/kevin-oulai/kami-mandi-croutons/collaborators');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/vnd.github+json',
        'Authorization: Bearer '.$githubToken,
        'User-Agent: NDI2024-App',
    ]);

    $response = curl_exec($ch);

    if (curl_errno($ch) == 0) {

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($httpCode === 200) {

            var_dump($response);
            $data = json_decode($response, true);
            
            $saveDir = './img/';

            foreach ($data as $user) {
                $login = $user['login'];
                $avatarUrl = $user['avatar_url'];

                $filePath = $saveDir . $login . '.png';

                $avatarData = file_get_contents($avatarUrl);
                if ($avatarData) {
                    file_put_contents($filePath, $avatarData);
                }
            }
        }
    }

    curl_close($ch);

    fclose($handleConfig);
?>