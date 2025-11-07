import { DataTypes } from "sequelize";
export default function initLocationGalleryModel(sequelize) {
    const ToursInclusions = sequelize.define('ToursInclusions', {
    locationGalleryID: {
            type: DataTypes.UUID,
            defaultValue: DataTypes.UUIDV4,
            primaryKey: true,
        },
        locationID: {
            type: DataTypes.UUID,
            allowNull: false,
        },
        imageUrl: {
            type: DataTypes.STRING,
            allowNull: false,
        },
        caption:{
            type: DataTypes.STRING,
            allowNull: false,
        },
        displayOrder:{
            type: DataTypes.INTEGER,
            allowNull: false,
            unsigned: true,
            defaultValue: 0,
        }
    }, {
        tableName: 'tours_inclusions',
    });
    return ToursInclusions;
}



// import { DataTypes } from "sequelize";
// import sequelize from "../config/database.config.js";

// const ToursInclusions = sequelize.define('ToursInclusions', {
//     tourInclusionID: {
//         type: DataTypes.UUID,
//         defaultValue: DataTypes.UUIDV4,
//         primaryKey: true,
//     },
//     tourID: {
//         type: DataTypes.UUID,
//         allowNull: false,
//     },
//     item: {
//         type: DataTypes.STRING,
//         allowNull: false,
//     },
//     displayOrder:{
//         type: DataTypes.INTEGER,
//         allowNull: false,
//         unsigned: true,
//         defaultValue: 0,
//     }
// }, {
//     tablename: 'ToursInclusions'
// });

// export default ToursInclusions;
