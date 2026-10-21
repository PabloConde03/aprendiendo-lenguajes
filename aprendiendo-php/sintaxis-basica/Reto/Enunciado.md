### 📝 Ejercicio: Sistema de Descuentos para una Tienda

Crea un script en PHP que calcule el precio final de una compra aplicando un descuento según el monto gastado y si el cliente es socio o no.

#### **Requisitos:**

1. **Variables a declarar:**
  * `$nombreCliente`: nombre del comprador (string).
  * `$montoCompra`: total de la compra antes de aplicar descuento (float o int, por ejemplo: `120`).
  * `$esSocio`: indica si el cliente está suscrito al club (boolean: `true` o `false`).
2. **Lógica de descuentos con condicionales:**
  * Si el cliente **es socio** (`$esSocio === true`), obtiene un **20% de descuento** (sin importar la cantidad gastada).
  * Si **no es socio**, pero el monto de la compra es **mayor o igual a 100**, obtiene un **10% de descuento**.
  * En cualquier otro caso, **no recibe descuento** (0%).
3. **Salida esperada (en pantalla con** **echo** **):**
  * Muestra el nombre del cliente.
  * Indica qué porcentaje de descuento se le aplicó (o si no aplicó ninguno).
  * Muestra el **precio final a pagar** tras aplicar el descuento.