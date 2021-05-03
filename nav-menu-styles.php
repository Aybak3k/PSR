<style>
      /* this styles section is for fixing up the positioning of the menu and the submenu */

    /* nav-menu styles */

      #nav-menu {
          display:grid;
          grid-template-columns: auto auto;
      }
      #nav-menu div {
          /* for layout dev process */
        /* border: 1px solid crimson;   */
      }


    /* overlay-contetn styles */
      .overlay-content{
        width: 200px;
        top: 35%;
        margin-left: 120px;
      }

      .overlay-content #hovered {
          color:#818181;
      }

      .overlay-content #hovered:hover {
          color:#f1f1f1;
          transition: color .2s .1s;
      }

    /* submenu styles */
      #submenu {
        position: relative;
        top: 35%;
        width: 800px;
        margin-left: 50px;
        text-align: left;
        display:grid;
        grid-template-columns:  repeat(3, 1fr);
        text-align:center;
        padding:5px;
        visibility:hidden;
      }

      #submenu a {
          font-size:20px;
          margin: 0;
          color: #fff;
          transition: visibility ease-in-out 0s;
      }

      #submenu a:hover {
          color: #006E4C;
      }

      #submenu h4 {
          color: #fff;
          margin-bottom:50px;
      }

      #submenu p{
        color: grey;
      }
</style>