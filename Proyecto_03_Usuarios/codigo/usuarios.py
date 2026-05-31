# la clase base
# de donde se basa todo para las herencias

class Usuario:

    # el constructor
    def __init__(self, nombre, email):
        self.nombre = nombre

        # se valida el correo
        if self.validar_email(email):
            self.email = email
        else:
            self.email = "Email invalido"

    # metodo para validar el email
    def validar_email(self, email):

        # esto valida que contenga lo necesario
        # para verificar si es correcto
        if "@" in email and "." in email:
            return True
        else:
            return False

    # muestra los datos
    def mostrar_datos(self):
        print(f"Nombre: {self.nombre}")
        print(f"Email: {self.email}")
#------------------------------desafios-------------------------------------
    # esto es para el acceso
    def acceso_sistema(self):
        print("Acceso al sistema.")

    # el "saludar" del desafio
    def saludar(self):
        print(f"Hola bienvenido {self.nombre}")