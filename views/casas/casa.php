<section class="seccion">
    <div id="casa-info" class="dos-columnas">
        <div class="casa-fotos">
            <img class="casa-imagen" src="<?php echo base_url ?>/assets/img/utils/example-2.jpg">
            <div class="galeria">
                <img class="casa-imagen-galeria" src="<?php echo base_url ?>/assets/img/utils/example.jpg">
                <img class="casa-imagen-galeria" src="<?php echo base_url ?>/assets/img/utils/example.jpg">
                <img class="casa-imagen-galeria" src="<?php echo base_url ?>/assets/img/utils/example.jpg">
                <img class="casa-imagen-galeria" src="<?php echo base_url ?>/assets/img/utils/example.jpg">
            </div>
        </div>
        <div id="columna-info" class="columna">
            <h2>Casa Rústica</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem officiis a nemo consectetur aliquam est voluptas distinctio esse, sed impedit accusantium molestiae saepe unde qui obcaecati id error quo fugiat.
                Nemo reiciendis a nisi quam ratione minus quia voluptates aut nam impedit! Nulla adipisci in rem consequuntur, repellendus ducimus at dolor consequatur quibusdam, quas perspiciatis vitae delectus qui quasi facilis.</p>

            <div class="check-list">
                <div class="check">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-aspect-ratio" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="3" y="5" width="18" height="14" rx="2" />
                        <path d="M7 12v-3h3" />
                        <path d="M17 12v3h-3" />
                    </svg>
                    <p>120m cuadrados</p>
                </div>
                <div class="check">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bed" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 7v11m0 -4h18m0 4v-8a2 2 0 0 0 -2 -2h-8v6" />
                        <circle cx="7" cy="10" r="1" />
                    </svg>
                    <p>4 habitaciones</p>
                </div>
                <div class="check">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-parking" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="4" y="4" width="16" height="16" rx="2" />
                        <path d="M9 16v-8h4a2 2 0 0 1 0 4h-4" />
                    </svg>
                    <p>Garaje incluido</p>
                </div>
                <div class="check">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tag" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="8.5" cy="8.5" r="1" fill="currentColor" />
                        <path d="M4 7v3.859c0 .537 .213 1.052 .593 1.432l8.116 8.116a2.025 2.025 0 0 0 2.864 0l4.834 -4.834a2.025 2.025 0 0 0 0 -2.864l-8.117 -8.116a2.025 2.025 0 0 0 -1.431 -.593h-3.859a3 3 0 0 0 -3 3z" />
                    </svg>
                    <p>2000$</p>
                </div>
            </div>

            <button onclick="mostrarForm()" class="btn-primary">Reservar</button>
        </div>

        <div id="columna-reserva" class="columna hidden">
            <h2>Casa Rústica</h2>

            <form class="form">
                <div class="input-box">
                    <label>Nombre</label>
                    <input type="text" name="nombre">
                </div>
                <div class="input-box">
                    <label>Apellido</label>
                    <input type="text" name="apellido">
                </div>
                <div class="input-box">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
                <div class="input-box">
                    <label>Telefono</label>
                    <input type="text" name="telefono">
                </div>
                <div class="input-box">
                    <label>Fecha de Reserva</label>
                    <input type="date" name="fecha_reserva">
                </div>
                <div class="input-box">
                    <label>Descripción</label>
                    <textarea></textarea>
                </div>

                <button onclick="enviarForm(event)" class="btn-primary">Reservar</button>
            </form>
        </div>
    </div>
</section>

<script src="<?php echo base_url ?>/assets/js/reserva.js"></script>