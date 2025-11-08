import { DataTypes } from "sequelize";
export default function initReviewsModel(sequelize) {
    const Reviews = sequelize.define('Reviews',{
        reviewID :{
            type: DataTypes.UUID,
            defaultValue: DataTypes.UUIDV4,
            primaryKey: true,
        },
        userID : {
            type: DataTypes.UUID,
            allowNull: false,

        },
        toursId: {
            type: DataTypes.UUID,
            allowNull: false,
        },
        rating: {
            type: DataTypes.INTEGER,
            allowNull: false,
            unsigned: true, 
        },
        comment: {
            type: DataTypes.STRING,
            allowNull: true,
        },
        createdAT:{
            type: DataTypes.DATE,
            allowNull: false,
            defaultValue: DataTypes.NOW,
        }
    },{
            timestamps:true,
            tableName: 'reviews',
    });
    return Reviews;
}

// import { DataTypes } from "sequelize";
// import sequelize from "../config/database.config.js"; // Import instance sequelize

// const Reviews= sequelize.define('Reviews',{
//     reviewID :{
//         type: DataTypes.UUID,
//         defaultValue: DataTypes.UUIDV4,
//         primarykey: true,
//     },
//     userID : {
//         type: DataTypes.UUID,
//         allowNull: false,

//     },
//     toursId: {
//         type: DataTypes.UUID,
//         allowNull: false,
//     },
//     rating: {
//         type: DataTypes.INTEGER,
//         allowNull: false,
//         unsigned: true, 
//     },
//     comment: {
//         type: DataTypes.STRING,
//         allowNull: true,
//     },
//     createdAT:{
//         type: DataTypes.DATE,
//         allowNull: false,
//         defaultValue: 'Current_timestamp',
//     }
// },{
//         timestamps:true,
//         tableName: 'reviews',
// });

// use
// export default Reviews;