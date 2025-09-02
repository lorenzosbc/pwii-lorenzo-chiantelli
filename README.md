# pwii-lorenzo-chiantelli

Aulas de Programação Web II com os Professores João Siles e Ricardo Palhares

## Guia para criar projeto Laravel  
- Primeiro instale o Laravel com o seguinte comando   
```powershell
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```

- Crie uma aplicação com o seguinte codigo
```bash
laravel new project
```

- Depois de criado e configurado faça
```bash
cd example-app
npm install && npm run build
composer run dev
```