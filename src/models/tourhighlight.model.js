import  {dataTypes} from "sequelize";
import sequelize from "../config/database.config.js";

const TourHighlight = sequelize.define('TourHighlight', {
    tourHighlightID: {
        type: DataTypes.UUID,
        defaultValue: DataTypes.UUIDV4,
        primaryKey: true,
    },
    tourID: {
        type: DataTypes.UUID,
        allowNull: false,
    },
    title:{
        type: DataTypes.STRING,
        allowNull: false,
    },
    description:{
        type: DataTypes.TEXT,
        allowNull: false,
    },
    imageURL:{
        type: DataTypes.STRING,
        allowNull: false,
    },
    displayOrder:{
        type: DataTypes.INTEGER,
        allowNull: false,
        unsigned: true,
    },
}, {
    tableName: 'TourHighlight'
});

export default TourHighlight;
    