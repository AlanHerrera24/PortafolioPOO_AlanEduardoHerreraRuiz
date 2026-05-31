from usuarios import Usuario

# clase de invitado que hereda de usuario

class Invitado(Usuario):

    # constructor
    def __init__(self, nombre, email):

        # lo del super
        super().__init__(nombre, email)

    # metodo sobrescrito
    def acceso_sistema(self):
        print("Acceso limitado como INVITADO.")