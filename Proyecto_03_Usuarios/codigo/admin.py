from usuarios import Usuario
# este hereda de usuarios
class Admin(Usuario):

    # el constructor
    def __init__(self, nombre, email, nivel_acceso):

        # lo del super
        super().__init__(nombre, email)

        self.nivel_acceso = nivel_acceso

    # para lo de sobrescribir
    def acceso_sistema(self):
        print("Acceso completo al sistema como ADMINISTRADOR.")

    # muestra los datos
    def mostrar_datos(self):
        super().mostrar_datos()
        print(f"Nivel de acceso: {self.nivel_acceso}")