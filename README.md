# 📨 IFRS Informativo Telegram bot 📲

> Receba as principais **novidades** do IFRS no seu **Telegram**  🔔

![](https://miro.medium.com/max/875/1*MOYp6dA37Srf452kHA6BaA.jpeg)

Saiba mais: https://pedroaf0.medium.com/criando-um-canal-informativo-no-telegram-usando-php-9d8a12279389

## Como aplicar para outro IF 
- Baixe a última versão funcional [clicando aqui](https://github.com/pedroaf0/IFRS_Informativo_Telegram_bot/releases/download/v1.0/IFRS_Informativo_Telegram_bot.release.1.rar "download/v1.0/IFRS_Informativo_Telegram_bot.release.1.rar").


- Crie um canal publico e dicione o @ no `env.php`
ex: [`$chat_id = '@ifrssertao';`](https://github.com/pedroaf0/IFRS_Informativo_Telegram_bot/blob/master/env.php.template#L6 "ver linha")


- Adicione a base da URL do site do seu IF no arquivo `env.php`
ex: [`$base_url = 'https://ifrs.edu.br/sertao/'`](https://github.com/pedroaf0/IFRS_Informativo_Telegram_bot/blob/master/env.php.template#L2 "ver linha")


- Crie um bot no telegram através do [@BotFather](https://t.me/BotFather "@BotFather"), ele lhe fornecerá um **token**.


- Adicione o **token** do seu bot no arquivo `env.php`
ex: [`$telegram_token = "<SEU TOKEN>";`](https://github.com/pedroaf0/IFRS_Informativo_Telegram_bot/blob/master/env.php.template#L4 "ver linha")


- Adicione o seu bot como admin do seu canal


- Hospede o projeto:
Serviços de hospedagem gratuita: [000webhost](www.000webhost.com "000webhost") e [heroku](www.heroku.com "heroku")


- Acesse o site [automate.io](http://automate.io "automate.io") e crie um bot com o trigger:`RSS Feed` e action:`WebHook`
ex:
![photo_2020-08-01_11-56-33](https://user-images.githubusercontent.com/54213349/89104240-2f738b00-d3ee-11ea-8ea4-cff52278dbf6.jpg)


- Pronto! Se surgir alguma duvida entre em contato comigo pelo Telegram: ![https://t.me/pedroaf0](https://img.shields.io/badge/t.me/-pedroaf0-blue?logo=telegram "https://t.me/pedroaf0") 
