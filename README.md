# El código misterioso: la tienda que regala dinero

## Objetivo

Corrige los errores de una aplicación PHP formada por dos páginas: `formulario.php` y `procesar.php`.

## Requisitos

- Enviar el formulario mediante **POST** a `procesar.php`.
- Recoger nombre, precio unitario, cantidad de unidades y código de descuento.
- Calcular el subtotal multiplicando precio por unidades.
- Aplicar un **10 %** de descuento cuando se compren **5 o más unidades**.
- Aplicar un **5 % adicional** sobre el importe ya descontado cuando el código sea `DAM2026`.
- Mostrar el cliente, el subtotal, los descuentos aplicados y el importe final.
- Mostrar una línea por cada unidad comprada mediante un bucle `for`.
- Validar los datos recibidos antes de procesarlos.

## Tu misión

Los archivos contienen **7 errores intencionados**. Localízalos y corrígelos. Además, completa la presentación de los resultados y la validación de los datos.

No consultes herramientas de IA para resolver el reto.

## Ejecución

1. Copia la carpeta en `htdocs` de XAMPP.
2. Inicia Apache.
3. Abre `http://localhost/reto_tienda_dam/formulario.php`.
4. Corrige el código y comprueba su funcionamiento.

## Prueba de referencia

Nombre: Ana · Precio: 20 € · Unidades: 5 · Código: DAM2026.

Subtotal: 100 € · Descuento por cantidad: 10 € · Descuento por código: 4,50 € · **Total final: 85,50 €**.
