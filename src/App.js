import React, { Component } from 'react';
import './App.css';

class App extends Component {
  constructor(props){
    super(props);
    this.state={
        categoriesArray:[],
    }
  }

    componentWillMount() {debugger
       fetch("https://jumlakuwait.com/api/ManageProduct_api/getAllCategories", {
        })
            .then(response => response.json())
            .then(responseJson => {
               console.log('sssssss',responseJson)
                this.setState({
                    categoriesArray: responseJson.status_message
                })
            });
    }
  render() {
      const {categoriesArray} =  this.state;
      let imgPath= "https://jumlakuwait.com/images/category_imgs/";
    return (
      <div className="App">
            {
                categoriesArray && categoriesArray.length ?
                    categoriesArray.map((value, index)=>{
                        return(
                            <div className="box">
                              {/*<img src={imgPath/value.category_img}  alt="logo" />*/}
                              <div className="padding">
                              <img className="image-arrange" src={imgPath + value.category_img }  alt="logo" />
                              <span className="text-margin">{value.category_name}</span>
                              </div>
                            </div>
                        );
                    }): null
            }
      </div>
    );
  }
}

export default App;
