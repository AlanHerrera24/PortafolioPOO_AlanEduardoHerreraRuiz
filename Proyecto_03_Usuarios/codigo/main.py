#la importacion
from admin import Admin
from cliente import Cliente
from invitado import Invitado

#Desafio
usuarios = []

#crear los objetos
admin1 = Admin("Bruce", "admin@gmail.com", "Alto")
cliente1 = Cliente("Clark", "cliente@gmail.com", 150)
invitado1 = Invitado("Amuro", "invitado@gmail.com")

#Para agregarlos a la lista
usuarios.append(admin1)
usuarios.append(cliente1)
usuarios.append(invitado1)

# menu interactivo(desafio)
while True:
    print("---------------------")
    print("|SISTEMA DE USUARIOS|")
    print("---------------------")
    print("1. Mostrar usuarios")
    print("2. Saludar usuarios")
    print("3. Mostrar accesos")
    print("4. Salir")

    opcion = input("Selecciona una opcion:")

    #mostrar los datos
    if opcion == "1":
        print("---------------------")
        print("|DATOS DE USUARIOS|")
        print("---------------------")

        # Lo del polimorfismo
        for usuario in usuarios:
            usuario.mostrar_datos()
            print("---------------------")

    #saludar
    elif opcion == "2":
        print("---------")
        print("|SALUDOS|")
        print("---------")

        for usuario in usuarios:
            usuario.saludar()

    #Acceso
    elif opcion == "3":
        print("--------------------")
        print("|ACCESOS AL SISTEMA|")
        print("--------------------")

        # Polimorfismo
        for usuario in usuarios:
            print(f"\n{usuario.nombre}:")
            usuario.acceso_sistema()

    #Salir/cerrar
    elif opcion == "4":

        print("Saliendo del sistema.Danos un momento")
        break

    else:
        print("Opción invalida.")