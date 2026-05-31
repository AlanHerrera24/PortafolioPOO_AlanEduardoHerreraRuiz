from usuarios import Usuario

# igual aqui se hererda de usuarios

class Cliente(Usuario):

    # constructor
    def __init__(self, nombre, email, puntos):

        # Uso del super
        super().__init__(nombre, email)

        self.puntos = puntos

    #el metodo a sobrescribir
    def acceso_sistema(self):
        print("Acceso al sistema como CLIENTE.")

    # y para mostrar los datos
    def mostrar_datos(self):
        super().mostrar_datos()
        print(f"Puntos acumulados: {self.puntos}")