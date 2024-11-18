// Crear una instancia de la clase Pop3Client
Pop3Client client = new Pop3Client();

// Especifique host, nombre de usuario y contraseña, puerto y opciones de seguridad para su cliente
client.setHost("pop.gmail.com");
client.setUsername("your.username@gmail.com");
client.setPassword("your.password");
client.setPort(995);
client.setSecurityOptions(SecurityOptions.Auto);
System.out.println("Connecting to POP3 server using SSL.");

// Acceder al buzón

// Crear una instancia de la clase Pop3Client
Pop3Client client = new Pop3Client("pop.domain.com", "username", "password");

// Establecer dirección proxy, puerto y proxy
String proxyAddress = "192.168.203.142";
int proxyPort = 1080;
SocksProxy proxy = new SocksProxy(proxyAddress, proxyPort, SocksVersion.SocksV5);
client.setProxy(proxy);

// Acceder al buzón
Pop3MailboxInfo mailboxInfo = client.getMailboxInfo();