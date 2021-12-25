<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="public/assets/css/style.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    *{
        box-sizing: border-box;
    }
    header{
        padding: 0 5%;
        display: flex;
        align-items: center;
        justify-content: end;
        margin: 0;
        height: 100vh;
        background: url("assets/images/welcome/header-background.jpg") no-repeat;
        background-size: cover;
    }

    .header-text{
        max-width: 40vw;
    }

    .header-text h1{
        font-family: Montserrat;
        font-style: normal;
        font-weight: bold;
        font-size: 48px;
        line-height: 59px;
        letter-spacing: -0.015em;

        color: #FFFBFB;

        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
    }

    .header-text h5{
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 24px;

        color: #FFFFFF;
    }

    header .stats{
        position: absolute;
        bottom: 2.5vh;
        left: 5vw;
    }

    .stats div{
        margin-right: 5vw;
    }

    .stats h5{
        font-family: Montserrat;
        font-style: normal;
        font-weight: bold;
        font-size: 24px;
        line-height: 29px;
        color: #FFFFFF;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .stats span{
        font-size: 16px;
    }

    .company-mission{
        padding: 5vh 10vw;
        height: 350px;
        background: url("assets/images/welcome/mission-image.png") no-repeat;
        background-position: 75% 50%;
    }
    .company-mission .mission-text{
        max-width: 30vw;
    }

    .mission-text h3{
        font-family: Montserrat;
        font-style: normal;
        font-weight: bold;
        font-size: 24px;
        line-height: 29px;
        letter-spacing: -0.015em;

        color: #000000;
    }

    .mission-text p{
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 24px;
        /* or 171% */

        letter-spacing: -0.015em;

        color: #000000;
    }

    .outsourcing-benefits{
        padding: 5vh 15vw;
        height: 600px;
        background: linear-gradient(180deg, #0886AF 0%, #FFFFFF 100%);
    }

    .outsourcing-benefits .header-text{
        margin: 0 auto;
        font-family: Montserrat;
        font-style: normal;
        font-weight: bold;
        font-size: 24px;
        line-height: 29px;
        letter-spacing: -0.015em;
        text-transform: uppercase;
        text-align: center;
        color: #FFFFFF;
    }

    .benefit-box{
        margin: 5vh 5vw;
        width: 150px;
        height: 150px;
    }

    .benefit-box h5 {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 22px;
        /* identical to box height */
        color: #FFFFFF;
    }

    .experience{
        padding: 5vh 20vw;
        height: 600px;
        background: url("assets/images/welcome/worldwide.jpg") no-repeat;
        background-position: 75% 50%;
    }

    .experience .experience-text{
        max-width: 30vw;
    }

    .header-lg-text{
        text-align: center;
        font-family: Montserrat;
        font-style: normal;
        font-weight: bold;
        font-size: 36px;
        line-height: 44px;
        /* identical to box height */

        letter-spacing: -0.015em;

        color: #000000;
    }

    .m-boxes{
        padding: 0 20vw;
        margin: 5vh auto;
        width: 100%;
    }

    .m-boxes .box{
        margin: 0;
        padding: 5vh 2vw;
        text-align: center;
        background: #f7fafc;
        box-shadow: 0px 4px 4px rgba(20, 124, 164, 0.5);
        text-align: center;
        font-family: Montserrat;
        font-style: normal;

    }
    .m-boxes .box:first-child{
        background: linear-gradient(180deg, rgba(251, 157, 117, 0.8) 0%, rgba(247, 247, 247, 0.8) 77.99%, rgba(255, 255, 255, 0.8) 99.99%, rgba(249, 115, 58, 0) 100%)
    }

    .m-boxes .box .header{
        font-size: 24px;
        line-height: 44px;
        font-weight: bold;
        /* identical to box height */
        letter-spacing: -0.015em;
        color: #000000;
    }

    .m-boxes .box .sub-header{
        margin: 0 auto;
        font-size: 18px;
        line-height: 24px;
        font-weight: bold;
        /* identical to box height */
        letter-spacing: -0.015em;
        color: #000000;
        max-width: 70%;
    }

    .m-boxes .box .link{
        margin: 5% auto;
        font-size: 18px;
        line-height: 24px;
        font-weight: bold;
        /* identical to box height */
        letter-spacing: -0.015em;
        color: #000000;
        max-width: 70%;
    }

    .technologies{
        width: 100%;
        height: 350px;
        background: #0B769F;
        padding: 10vh 10vw;
    }
    .technologies h4{
        text-align: center;
        margin: 0 auto;
        font-family: Montserrat;
        font-style: normal;
        font-weight: bold;
        font-size: 24px;
        line-height: 29px;
        letter-spacing: -0.015em;

        color: #FFFFFF;
    }

    .technologies p{
        margin: 2vh 0;
        font-family: Montserrat;
        font-style: normal;
        font-weight: 300;
        font-size: 24px;
        line-height: 29px;
        text-align: center;
        letter-spacing: -0.015em;

        color: #FFFFFF;
    }

    .stacks{
        padding: 5vh 15vw;
    }

    .stacks .stack{
        padding: 2vh 3vh;
        background: rgba(196, 196, 196, 0.2);
        border-radius: 10px;
        max-width: 260px;
        margin: 0.5vw;
        min-height: 300px;
    }
    .stack h5{
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 22px;
        /* identical to box height */

        letter-spacing: -0.015em;

        color: #000000;
    }

    .stack p{
        font-family: Montserrat;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 17px;
        text-align: center;
        letter-spacing: -0.015em;

        color: #000000;
    }
</style>
@yield('styles')


