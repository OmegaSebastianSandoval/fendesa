<div style="width: 100%; background: #6e6e6e20; padding: 50px; font-size: 15px;">
  <table style="max-width: 600px; background: #FFF; border: 2px solid #F04263; margin: auto; padding: 20px;">
    <tr>
      <td style="background-color: #F04263; display: flex; justify-content: center;">
        <img src="https://www.fendesa.com/skins/page/images/logo.png" alt="" height="50"  style="margin:auto;">
      </td>
    </tr>
    <tr>
      <td style="padding: 10px 20px; padding-bottom: 20px;">
        <span style="color: #333333;">
          Se ha enviado una consulta con los siguientes datos:
        </span>
      </td>
    </tr>
    <tr>
      <td style="padding: 3px 20px;">
        <span style="color: #6e6e6e;">
          <b>
            Nombres y Apellidos:
          </b>
          <?php echo $this->data['nombre'] ?>
        </span>
      </td>
    </tr>
    <tr>
      <td style="padding: 3px 20px;">
        <span style="color: #6e6e6e;">
          <b>
            Correo electrónico:
          </b>
          <?php echo $this->data['email'] ?>
        </span>
      </td>
    </tr>
    
    <tr>
      <td style="padding: 3px 20px;">
        <span style="color: #6e6e6e;">
          <b>
            Asunto:
          </b>
          <?php echo $this->data['asunto'] ?>
      </td>
    </tr>
    <tr>
      <td style="padding: 3px 20px; padding-bottom: 30px;">
        <span style="color: #6e6e6e;">
          <b>
            Mensaje:
          </b>
          <?php echo $this->data['mensaje'] ?>
      </td>
    </tr>
  </table>
</div>