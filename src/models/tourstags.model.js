import { DataTypes } from "sequelize";

export default function initToursTagsModel(sequelize) {
    const ToursTags = sequelize.define('ToursTags', {
        tourID: {
            type: DataTypes.UUID,
            defaultValue: DataTypes.UUIDV4,
            primaryKey: true,
        },
        tagID: {
            type: DataTypes.UUID,
            allowNull: false,
            primaryKey: true,
        },
    }, {
        tableName: 'ToursTags'
    });
    return ToursTags;
}   


// import { DataTypes } from "sequelize";
// import sequelize from "../config/database.config.js";

// const ToursTags = sequelize.define('ToursTags', {
//     tourID: {
//         type: DataTypes.UUID,
//         defaultValue: DataTypes.UUIDV4,
//         primaryKey: true,
//     },
//     tagID: {
//         type: DataTypes.UUID,
//         allowNull: false,
//         primaryKey: true,
//     },
    
   
// }, {
//     tableName: 'ToursTags'
// });

// export default ToursTags;
