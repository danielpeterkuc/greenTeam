import styled from 'styled-components';
import { Container } from 'react-bootstrap';
const StyledRegister = styled.div`
// @import url('https://fonts.googleapis.com/css?family=Numans');

// html,body{
//   background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
//   background-size: cover;
//   background-repeat: no-repeat;
//   height: 100%;
//   font-family: 'Numans', sans-serif;
//   }

.card{
  margin-top: auto;
  margin-bottom: auto;
  background-color: rgba(0,0,0,0.5) !important;
}

.card-header p{
  color: white;
}

.form-group, .card-footer {
  margin: 1rem 0;
}

.input-group-prepend span{
  // width: 50px;
  background-color: #FFC312;
  color: black;
  border:0 !important;
}

input:focus{
  outline: 0 0 0 0  !important;
  box-shadow: 0 0 0 0 !important;
}

.register_btn{
  color: black;
  background-color: #FFC312;
  width: 100px;
  }

.register_btn:hover{
  color: black;
  background-color: white;
  }

.links{
  color: white;
}

.links a{
  margin-left: 4px;
  }

a {
  text-decoration:none;
}
`

const CONTAINER = styled(Container)`
  background-color:lightblue;
`;

export {
  StyledRegister,
  CONTAINER
};