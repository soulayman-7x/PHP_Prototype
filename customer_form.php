<style>
    body {
        background-color: #050505;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        font-family: 'Inter', sans-serif;
    }

    fieldset {
        border: 2px solid #BC13FE;
        border-radius: 10px;
        padding: 25px;
        width: 350px;
        box-shadow: 0 0 20px rgba(188, 19, 254, 0.15);
        background: #0f0f0f;
    }

    legend {
        color: #BC13FE;
        font-weight: 900;
        font-size: 1.1rem;
        padding: 0 12px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .form-group {
        margin-bottom: 18px;
    }

    label {
        display: block;
        color: #00E5FF;
        font-size: 0.8rem;
        margin-bottom: 6px;
        font-weight: 600;
        text-transform: uppercase;
    }

    input,
    textarea {
        width: 100%;
        padding: 12px;
        background: #1a1a1a;
        border: 1px solid #333;
        border-radius: 5px;
        color: #fff;
        box-sizing: border-box;
        transition: all 0.3s ease;
    }

    input:focus,
    textarea:focus {
        outline: none;
        border-color: #00E5FF;
        box-shadow: 0 0 12px rgba(0, 229, 255, 0.4);
    }

    button {
        width: 100%;
        padding: 14px;
        margin-top: 10px;
        border: none;
        border-radius: 5px;
        background: linear-gradient(135deg, #00E5FF, #BC13FE);
        color: white;
        font-weight: 800;
        text-transform: uppercase;
        cursor: pointer;
        letter-spacing: 1px;
        transition: 0.3s;
    }

    button:hover {
        box-shadow: 0 0 20px rgba(188, 19, 254, 0.6);
        filter: brightness(1.1);
    }
</style>



<fieldset>
    <legend>Address Client</legend>

    <form action="display_info.php" method="POST">
        <div class="form-group">
            <label for="first_N">First Name.</label>
            <input type="text" name="first_name" id="first_N" required>
        </div>

        <div class="form-group">
            <label for="last_N">Last Name.</label>
            <input type="text" name="last_name" id="last_N" required>
        </div>

        <div class="form-group">
            <label for="address">Address.</label>
            <textarea name="address" id="address"></textarea>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" required>
        </div>

        <div class="form-group">
            <label for="code">Postal code</label>
            <input type="number" name="code" id="code">
        </div>

        <button type="submit">Send</button>
    </form>
</fieldset>