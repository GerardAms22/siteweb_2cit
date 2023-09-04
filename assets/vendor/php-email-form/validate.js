
// Inclure la bibliothèque PHPMailer
import { PHPMailer } from 'phpmailer';

// Initialiser la classe PHPMailer
const phpMailer = new PHPMailer();

// Configurer les paramètres SMTP
phpMailer.isSMTP();
phpMailer.Host = 'smtp.gmail.com'; // remplacer par votre propre serveur SMTP
phpMailer.Port = 465; // remplacer par le port de votre serveur SMTP
phpMailer.SMTPSecure = 'ssl'; // remplacer par le type de chiffrement de votre serveur SMTP
phpMailer.SMTPAuth = true;
phpMailer.Username = 'gerardpoukpezi30@gmail.com'; // remplacer par votre propre nom d'utilisateur SMTP
phpMailer.Password = 'okkieffkivnmwfzh'; // remplacer par votre propre mot de passe SMTP

function php_email_form_submit(thisForm, action, formData) {
  thisForm.querySelector('.loading').classList.add('d-block');

  // Envoyer le message avec PHPMailer
  phpMailer.setFrom(formData.get('email'), formData.get('nom') + ' ' + formData.get('prenom'));
  phpMailer.addAddress('gerardpoukpezi30@gmail.com'); // remplacer par l'adresse email de destination
  phpMailer.Subject = formData.get('sujet');
  phpMailer.Body = formData.get('message');

  phpMailer.send()
    .then((response) => {
      thisForm.querySelector('.loading').classList.remove('d-block');

      // Afficher le message de confirmation d'envoi si la réponse du serveur est "OK"
      if (response === 'OK') {
        thisForm.querySelector('.sent-message').classList.add('d-block');
        thisForm.reset();
      } else {
        throw new Error(response ? response : 'Le message n\'a pas pu être envoyé.');
      }
    })
    .catch((error) => {
      displayError(thisForm, error);
    });
}


