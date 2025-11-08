import { DataTypes } from "sequelize";
export default function initToursModel(sequelize) {
    const Tours = sequelize.define('Tours', {
        tourId: {
            type: DataTypes.UUID,
            defaultValue: DataTypes.UUIDV4,
            primaryKey: true,
        },
        locationID:{
            type: DataTypes.UUID,
            allowNull: false,
        },
        name: {
            type: DataTypes.STRING,
            allowNull: false,
        },
        description:{
            type: DataTypes.TEXT,
            allowNull: false,
        },
        itinerary:{
            type: DataTypes.TEXT,
            allowNull: false,
        },
        content:{
            type: DataTypes.TEXT,
            allowNull: false,
        },
        durationValue:{
            type: DataTypes.INTEGER,
            allowNull: false,
            unsigned: true,
        },
        price:{
            type: DataTypes.DECIMAL(12,2),
            allowNull: false,
        },
        coverImageface:{
            type: DataTypes.STRING,
            allowNull: true,    
        },
        slug:{
            type: DataTypes.STRING,
            allowNull: false,
        },
        durationUnit:{
            type: DataTypes.ENUM('hours','days'),
            allowNull: false,
            defaultValue: 'days',
        }
    }
    ,{
        tableName: 'Tours',
    });
    return Tours;
}

// import { DataTypes } from "sequelize";
// import sequelize from "../config/database.config.js"; // Import instance sequelize

// const Tours = sequelize.define('Tours', {
//     tourId: {
//         type: DataTypes.UUID,
//         defaultValue: DataTypes.UUIDV4,
//         primaryKey: true,
//     },
//     locationID:{
//         type: DataTypes.UUID,
//         allowNull: false,
//     },
//     name: {
//         type: DataTypes.STRING,
//         allowNull: false,
//     },
//     description:{
//         type: DataTypes.TEXT,
//         allowNull: false,
//     },
//     itinerary:{
//         type: DataTypes.TEXT,
//         allowNull: false,
//     },
//     content:{
//         type: DataTypes.TEXT,
//         allowNull: false,
//     },
//     durationValue:{
//         type: DataTypes.INTEGER,
//         allowNull: false,
//         unsigned: true,
//     },
//     price:{
//         type: DataTypes.DECIMAL(12,2),
//         allowNull: false,
//     },
//     coverImageface:{
//         type: DataTypes.STRING,
//         allowNull: true,
//     },
//     slug:{
//         type: DataTypes.STRING,
//         allowNull: false,
    
//     },
//     durationUnit:{
//         type: DataTypes.ENUM('hours','days'),
//         allowNull: false,
//         defaultValue: 'days',

//     }
// }
// ,{
//     tableName: 'Tours',
    
// });

// export default Tours;